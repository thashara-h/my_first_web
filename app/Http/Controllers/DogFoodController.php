<?php

namespace App\Http\Controllers;
use App\Models\DogFood;
use Illuminate\Http\Request;

class DogFoodController extends Controller
{
    //
    public function loadAllDogFood(){
        $all_dogfood=DogFood::all();
        return view('managedogfood',compact('all_dogfood'));
    }

    public function loadAddDogFoodForm(){
        return view('addDogFood');
    }

    public function AddDogFood(Request $request){
        //form validation
        $request->validate([
            'product_name'=>'required|string',
            'Weight'=>'required|string',
            'price'=>'required|integer',
            'description'=>'required|string',
            'flavor'=>'required|string',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        
        try{
        $imagePath = $request->file('image')->store('product_images', 'public');
        
        $new_dogfood=new DogFood;
        $new_dogfood->product_name=$request->product_name;
        $new_dogfood->Weight=$request->Weight;
        $new_dogfood->price=$request->price;
        $new_dogfood->description=$request->description;
        $new_dogfood->flavor=$request->flavor;
        $new_dogfood->image=$imagePath;
        
        $new_dogfood->save();

        return redirect('/managedogfood')->with('success','Item added successfully');
        }catch(\Exception $e){
        return redirect('/addDogFood')->with('fail',$e->getMessage());

        }
    }

    public function EditDogFood(Request $request){
        //form validation
        $request->validate([
            'product_name'=>'required|string',
            'Weight'=>'required|string',
            'price'=>'required|integer',
            'description'=>'required|string',
            'flavor'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048', // up to 2MB

        ]);

        //update pet
        try{
        $update_dogfood=DogFood::where('id',$request->dogfood_id)->update([
            'product_name'=>$request->product_name,
            'Weight'=>$request->Weight,
            'price'=>$request->price,
            'description'=>$request->description,
            'flavor'=>$request->flavor,
            'image'=>$request->image,

        ]);

        return redirect('/managedogfood')->with('success','Updated successfully');
        }catch(\Exception $e){
        return redirect('/addDogFood')->with('fail','$e->getMessage()');

        }
    }

    public function loadDogEditForm($id){
        $dogfood=DogFood::find($id);

        return view('editdogfood',compact('dogfood'));

        
    }   
    public function deleteDogFood($id){
        try {
            DogFood::where('id',$id)->delete();
            return redirect('/managedogfood')->with('successs','Deleted Successfully!');
        } catch (\Exception $e) {
             return redirect('/managedogfood')->with('fail',$e->getMessage());
        }
    }
    public function showPublicDogFood()
{
    $dogFoods = DogFood::where('is_active', true)
               ->orderBy('created_at', 'desc')
               ->get();

    return view('dogfood', [
        'dogFoods' => $dogFoods,
        'cartCount' => count(session('cart', []))
    ]);
}

}
