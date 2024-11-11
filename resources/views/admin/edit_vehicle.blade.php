<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
    .vehicle_title
        {
            font-size:25px;
            font-weight:bold;
            text-align:center;
            padding:30px;
            color:white;
        }
        input[type=text]{
            width: 200%;
            padding: 12px 20px;
            margin: 8px 0;
            border: 2px solid red;
            
        }

        .content {
            border-radius: 5px;
            background-color: #273e4d;
            padding: 20px;
}

        label
        {
            display:inline-block;
            width:200px;
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
            <form action="{{url('update_vehicle', $vehicle->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <h2 class="vehicle_title">Edit Vehicle details</h2>
        <div class="div_center">

            @csrf
                <div class="content" >
                    <label>Vehicle Type</label>
                    <input type:"text" name="vehicle_type" value="{{$vehicle->vehicle_type}}"></input>
                </div>
                <div class ="content">
                    <label>Vehicle Number Plate</label>
                    <input type:"text" name="number_plate" value="{{$vehicle->number_plate}}"></input>
                </div>
                <div  class ="content" >
                    <label>Assigned Driver</label>
                    <input type:"text" name="assigned_driver" value="{{$vehicle->assigned_driver}}"></input>
                </div>
                <div  class ="content" >
                    
                    <input type="submit" class="btn btn-primary"></input>
                </div>

            </form>    
    </div>

        @include('admin.footer')
  </body>
</html>
