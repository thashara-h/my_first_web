<?php

namespace App\Http\Controllers;
use App\Models\OtherFood;
use Illuminate\Http\Request;

class OtherFoodController extends Controller
{
    public function loadAllOtherFood(){
        $all_otherfood=OtherFood::all();
        return view('manageotherpetfood',compact('all_otherfood'));
    }

    public function loadAddOtherFoodForm(){
        return view('addOtherFood');
    }

    public function AddOtherFood(Request $request){
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
        
        $new_otherfood=new Otherfood;
        $new_otherfood->product_name=$request->product_name;
        $new_otherfood->Weight=$request->Weight;
        $new_otherfood->price=$request->price;
        $new_otherfood->description=$request->description;
        $new_otherfood->flavor=$request->flavor;
        $new_otherfood->image=$imagePath;
        
        $new_otherfood->save();

        return redirect('/manageotherpetfood')->with('success','Item added successfully');
        }catch(\Exception $e){
        return redirect('/addOtherFood')->with('fail',$e->getMessage());

        }
    }
    public function EditOtherFood(Request $request){
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
        $update_otherfood=OtherFood::where('id',$request->otherfood_id)->update([
            'product_name'=>$request->product_name,
            'Weight'=>$request->Weight,
            'price'=>$request->price,
            'description'=>$request->description,
            'flavor'=>$request->flavor,
            'image'=>$request->image,

        ]);

        return redirect('/manageotherpetfood')->with('success','Updated successfully');
        }catch(\Exception $e){
        return redirect('/addOtherFood')->with('fail','$e->getMessage()');

        }
    }

    public function loadOtherEditForm($id){
        $otherfood=OtherFood::find($id);

        return view('editotherfood',compact('otherfood'));

        
    }   
    public function deleteOtherFood($id){
        try {
            OtherFood::where('id',$id)->delete();
            return redirect('/manageotherpetfood')->with('successs','Deleted Successfully!');
        } catch (\Exception $e) {
             return redirect('/manageotherpetfood')->with('fail',$e->getMessage());
        }
    }

    public function showPublicOtherFood(){
    $otherFoods = OtherFood::where('is_active', true)
               ->orderBy('created_at', 'desc')
               ->get();

    return view('otherfood', [
        'otherFoods' => $otherFoods,
        'cartCount' => count(session('cart', []))
    ]);
    }
}
