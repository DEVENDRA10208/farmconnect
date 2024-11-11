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
            width: 90%;
            length;
            text-align: center;
            margin-left: 50px; 
            
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
        <h2 class="title_deg">Orders for Delivery</h2>
        <table class="table_design">
            <tr class="th_deg">
                <th>Order ID</th>
                <th>User Email</th>
                <th>Produce Name</th>
                <th>Pickup Location </th>
                <th>Quantity for delivery</th>
                <th>Payment Transaction<th>
                    <th> Created On</th>
            </tr>

            @foreach($delivery as $delivery)
            <tr>
                <td>{{$delivery->id}}</td>
                <td>{{$delivery->email}}</td>
                <td>{{$delivery->produce_name}}</td>
                <td>{{$delivery->pickup_location}}</td>
                <td>{{$delivery->delivery_quantity}}</td>
                <td>{{$delivery->payment_transaction}}</td>
                <td>{{$delivery->created_at}}</td>
                
            </tr>
            @endforeach

        </table>
        
    
    </div>
        @include('admin.footer')
  </body>
</html>
