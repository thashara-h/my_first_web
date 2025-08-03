<?php

namespace App\Http\Controllers;
use App\Models\CatFood;
use Illuminate\Http\Request;

class CatFoodController extends Controller
{
    //
    public function loadAllCatFood(){
        $all_catfood=CatFood::all();
        return view('managecatfood',compact('all_catfood'));
    }

    public function loadAddCatFoodForm(){
        return view('addCatFood');
    }

    public function AddCatFood(Request $request){
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
        
        $new_catfood=new CatFood;
        $new_catfood->product_name=$request->product_name;
        $new_catfood->Weight=$request->Weight;
        $new_catfood->price=$request->price;
        $new_catfood->description=$request->description;
        $new_catfood->flavor=$request->flavor;
        $new_catfood->image=$imagePath;
        
        $new_catfood->save();

        return redirect('/managecatfood')->with('success','Item added successfully');
        }catch(\Exception $e){
        return redirect('/addCatFood')->with('fail',$e->getMessage());

        }
    }
    public function EditCatFood(Request $request){
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
        $update_catfood=CatFood::where('id',$request->catfood_id)->update([
            'product_name'=>$request->product_name,
            'Weight'=>$request->Weight,
            'price'=>$request->price,
            'description'=>$request->description,
            'flavor'=>$request->flavor,
            'image'=>$request->image,

        ]);

        return redirect('/managecatfood')->with('success','Updated successfully');
        }catch(\Exception $e){
        return redirect('/addCatFood')->with('fail','$e->getMessage()');

        }
    }

    public function loadCatEditForm($id){
        $catfood=CatFood::find($id);

        return view('editcatfood',compact('catfood'));

        
    }   
    public function deleteCatFood($id){
        try {
            CatFood::where('id',$id)->delete();
            return redirect('/managecatfood')->with('successs','Deleted Successfully!');
        } catch (\Exception $e) {
             return redirect('/managecatfood')->with('fail',$e->getMessage());
        }
    }

    public function showPublicCatFood(){
    $catFoods = CatFood::where('is_active', true)
               ->orderBy('created_at', 'desc')
               ->get();

    return view('catfood', [
        'catFoods' => $catFoods,
        'cartCount' => count(session('cart', []))
    ]);
}
}
