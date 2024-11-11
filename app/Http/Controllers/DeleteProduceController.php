<?php

namespace App\Http\Controllers;
use App\Models\Produce;
use Illuminate\Http\Request;


    
class DeleteProduceController extends Controller {

    public function index() 
    {
       
       return view('viewproduce');
    }
    public function destroy(Produce $produce)
    {
        $produce->delete();
        return redirect()->route('viewproduce')->with('success','Produce has been deleted successfully');
    }
}