<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicle;

use App\Models\User;

class AdminController extends Controller
{
    public function vehicle_page()
    {
        return view('admin.vehicle_page');
    }

    public function add_vehicle(request $request)
    {
        $vehicle= new Vehicle;        
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->number_plate = $request->number_plate;
        $vehicle->assigned_driver = $request->assigned_driver;
        $vehicle->save();

        return redirect()->back();
    }

    public function show_vehicle()
    {
        $vehicle = Vehicle::all();
        return view('admin.show_vehicle', compact('vehicle'));
    }

    public function delete_vehicle($id)

    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->back()->with('message', 'Vehicle has been deleted successfully');

    }

    public function edit_vehicle($id)
    {
        $vehicle=Vehicle::find($id);

        return view('admin.edit_vehicle', compact('vehicle'));
    }

    public function update_vehicle(Request $request, $id)
    {
        $data=Vehicle::find($id);
        $data->vehicle_type=$request->vehicle_type;
        $data->number_plate=$request->number_plate;
        $data->assigned_driver=$request->assigned_driver;
        $data->save();
        return redirect()->back();
    }


    
    public function user_page()
    {
        return view('admin.user_page');
    }

        public function add_user(request $request)
    {
        $user= new User;        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->usertype = $request->usertype;
        $user->save();

        //return redirect()->back();
        return redirect()->back()->with('message', 'Driver has been added successfully!');
    }
    
    
    
    public function show_user()
    {
        $user = User::all();
        return view('admin.show_user', compact('user'));
    }

      public function edit_user($id)
    {
        $user=User::find($id);

        return view('admin.edit_user', compact('user'));
    }

    public function update_user(Request $request, $id)
    {
        $data=user::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->usertype=$request->usertype;
        $data->save();
        
        return redirect()->back();
    }


}
