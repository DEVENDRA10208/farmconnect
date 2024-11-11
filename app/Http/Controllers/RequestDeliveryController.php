<?php

namespace App\Http\Controllers;
use App\Models\RequestDelivery;
use Illuminate\Http\Request;

class RequestDeliveryController extends Controller
{
   public function index(){
    return view('requestdelivery');
   }

   public function request_delivery(Request $request){

        $delivery=new RequestDelivery;
        $delivery->produce_name = $request->produce_name;
        $delivery->email = $request->email;
        $delivery->pickup_location = $request->pickup_location;
        $delivery->delivery_quantity = $request->delivery_quantity;
        $delivery->payment_transaction = $request->payment_transaction;
        $delivery->save();
      
       
       return view('dashboard');
   }

   /*public function show_delivery()
    {
        $delivery = RequestDelivery::all();
        return view('admin.show_delivery', compact('delivery'));
    }*/
   

public function show_delivery()
{
    $delivery = RequestDelivery::all();
    return view('admin.show_delivery', compact('delivery'));
}

public function view_delivery()
{
    $delivery = RequestDelivery::all();
    return view('driver.view_delivery', compact('delivery'));
}


}
