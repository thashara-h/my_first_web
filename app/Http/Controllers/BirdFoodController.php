<?php

namespace App\Http\Controllers;
use App\Models\BirdFood;
use Illuminate\Http\Request;

class BirdFoodController extends Controller
{
   public function loadAllBirdFood(){
        $all_birdfood=BirdFood::all();
        return view('managebirdfood',compact('all_birdfood'));
    }

    public function loadAddBirdFoodForm(){
        return view('addbirdFood');
    }

    public function AddBirdFood(Request $request){
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
        
        $new_birdfood=new Birdfood;
        $new_birdfood->product_name=$request->product_name;
        $new_birdfood->Weight=$request->Weight;
        $new_birdfood->price=$request->price;
        $new_birdfood->description=$request->description;
        $new_birdfood->flavor=$request->flavor;
        $new_birdfood->image=$imagePath;
        
        $new_birdfood->save();

        return redirect('/managebirdfood')->with('success','Item added successfully');
        }catch(\Exception $e){
        return redirect('/addBirdFood')->with('fail',$e->getMessage());

        }
    }
    public function EditBirdFood(Request $request){
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
        $update_Birdfood=BirdFood::where('id',$request->birdfood_id)->update([
            'product_name'=>$request->product_name,
            'Weight'=>$request->Weight,
            'price'=>$request->price,
            'description'=>$request->description,
            'flavor'=>$request->flavor,
            'image'=>$request->image,

        ]);

        return redirect('/managebirdfood')->with('success','Updated successfully');
        }catch(\Exception $e){
        return redirect('/addBirdFood')->with('fail','$e->getMessage()');

        }
    }

    public function loadBirdEditForm($id){
        $birdfood=BirdFood::find($id);

        return view('editbirdfood',compact('birdfood'));

        
    }   
    public function deleteBirdFood($id){
        try {
            BirdFood::where('id',$id)->delete();
            return redirect('/managebirdfood')->with('successs','Deleted Successfully!');
        } catch (\Exception $e) {
             return redirect('/managebirdfood')->with('fail',$e->getMessage());
        }
    }

    public function showPublicBirdFood(){
    $birdFoods = BirdFood::where('is_active', true)
               ->orderBy('created_at', 'desc')
               ->get();

    return view('birdfood', [
        'birdFoods' => $birdFoods,
        'cartCount' => count(session('cart', []))
    ]);
    }
}
