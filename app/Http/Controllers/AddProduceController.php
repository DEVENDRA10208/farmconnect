<?php

namespace App\Http\Controllers;
use App\Models\AddProduce;
use Illuminate\Http\Request;

class AddProduceController extends Controller
{
   
    public function index()
    {
        return view('addproduce');
    }
    public function add_produce(Request $request)
    {
      

        $produc=new AddProduce;
        $produc->produce_name = $request->produce_name;
        $produc->produce_desc = $request->produce_desc;
        $produc->produce_price_per_kg = $request->produce_price_per_kg;
        $produc->produce_certification = $request->produce_certification;
        $produc->produce_image = $request->produce_image;
       $produc->save();
       
       return view('redirect');
    }
    public function destroy($id) 
    {
       $produce = AddProduce::where('id', $id)->firstorfail()->delete();
     
      return view('redirect');
    }
    
    //public function edit(Request $request,$id) {
       
        
      //  DB::update('update add_produces where id = ?',[$id]);
      //  echo "Record updated successfully.<br/>";
      //  echo '<a href = "/viewproduce">Click Here</a> to go back.';
     //}
     
     
  
}
