<!DOCTYPE html>
<html>
  <head> 
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
        <h2 class="vehicle_title">Add a new vehicle</h2>
        <div class="div_center">

            <form action="{{url('add_vehicle')}}" method="POST" enctype="multipart/form-data">

            @csrf
                <div class="content" >
                    <label>Vehicle Type</label>
                    <input type:"text" name="vehicle_type" placeholder="Vehicle Type..."></input>
                </div>
                <div class ="content">
                    <label>Vehicle Number Plate</label>
                    <input type:"text" name="number_plate" placeholder="Vehicle Number Plate"></input>
                </div>
                <div  class ="content" >
                    <label>Assigned Driver</label>
                    <input type:"text" name="assigned_driver" placeholder="Assigned Driver"></input>
                </div>
                <div  class ="content" >
                    
                    <input type="submit" class="btn btn-primary"></input>
                </div>
            </form>

            </div>
        </div>

        @include('admin.footer')
  </body>
</html>
