<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;


class PetController extends Controller
{
    //
    public function loadAllPets(){
        $all_pets=Pet::all();
        return view('managepets',compact('all_pets'));
    }

    public function loadAddPetForm(){
        return view('addpet');
    }

    public function AddPet(Request $request){
        //form validation
        $request->validate([
            'pet_name'=>'required|string',
            'pet_type'=>'required|string',
            'age'=>'required|integer',
            'health_status'=>'required|string',

        ]);

        //register pet
        try{
        $new_pet=new Pet;
        $new_pet->pet_name=$request->pet_name;
        $new_pet->pet_type=$request->pet_type;
        $new_pet->age=$request->age;
        $new_pet->health_status=$request->health_status;
        $new_pet->save();

        return redirect('/managepets')->with('success','Pet added successfully');
        }catch(\Exception $e){
        return redirect('/addpet')->with('fail',$e->getMessage());

        }
    }
    public function EditPet(Request $request){
        //form validation
        $request->validate([
            'pet_name'=>'required|string',
            'pet_type'=>'required|string',
            'age'=>'required|integer',
            'health_status'=>'required|string',

        ]);

        //update pet
        try{
        $update_pet=Pet::where('id',$request->pet_id)->update([
            'pet_name'=>$request->pet_name,
            'pet_type'=>$request->pet_type,
            'age'=>$request->age,
            'health_status'=>$request->health_status,

        ]);

        return redirect('/managepets')->with('success','Pet Updated successfully');
        }catch(\Exception $e){
        return redirect('/addpet')->with('fail','$e->getMessage()');

        }
    }
    public function loadEditForm($id){
        $pet=Pet::find($id);

        return view('editpet',compact('pet'));

        
    }   
    public function deletePet($id){
        try {
            Pet::where('id',$id)->delete();
            return redirect('/managepets')->with('successs','User Deleted Successfully!');
        } catch (\Exception $e) {
             return redirect('/managepets')->with('fail',$e->getMessage());
        }
    }

}
