<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        
        .title_deg
        {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .table_design
        {
            border: 1px solid white;
            width: 70%;
            length;
            text-align: center;
            margin-left: 140px; 
            
        }
        .th_deg
        {
            background-color: #B43757;
        }
            
        
    </style>
  </head>
  <body>
        @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
    <div class="page-content">
        @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h2 class="title_deg">Available Vehicles</h2>
        <table class="table_design">
            <tr class="th_deg">
                <th>Vehicle Number</th>
                <th>Vehicle Number Plate</th>
                <th>Vehicle Type</th>
                <th>Assigned Driver</th>
                <th>Delete</th>
                <th>Edit<th>
            </tr>

            @foreach($vehicle as $vehicle)
            <tr>
                <td>{{$vehicle->id}}</td>
                <td>{{$vehicle->number_plate}}</td>
                <td>{{$vehicle->vehicle_type}}</td>
                <td>{{$vehicle->assigned_driver}}</td> 
                <td><a href="{{url('delete_vehicle', $vehicle->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</a></td>
                <td>
                    <a href="{{url('edit_vehicle', $vehicle->id)}}" class="btn btn-success">Edit</a>
                </td>
            </tr>
            @endforeach

        </table>
        
    
    </div>
        @include('admin.footer')
  </body>
</html>
