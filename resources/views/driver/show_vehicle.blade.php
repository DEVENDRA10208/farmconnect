<!DOCTYPE html>
<html>
  <head> 
    @include('driver.css')
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
        @include('driver.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      
      @include('driver.sidebar')
      <!-- Sidebar Navigation end-->
      
    <div class="page-content">
        
        <h2 class="title_deg">Available Vehicles</h2>
        <table class="table_design">
            <tr class="th_deg">
                <th>Vehicle Number</th>
                <th>Vehicle Number Plate</th>
                <th>Vehicle Type</th>
                <th>Assigned Driver</th>
                
            </tr>

            @foreach($vehicle as $vehicle)
            <tr>
                <td>{{$vehicle->id}}</td>
                <td>{{$vehicle->number_plate}}</td>
                <td>{{$vehicle->vehicle_type}}</td>
                <td>{{$vehicle->assigned_driver}}</td> 
                
            </tr>
            @endforeach

        </table>
        
    
    </div>
        @include('driver.footer')
  </body>
</html>
