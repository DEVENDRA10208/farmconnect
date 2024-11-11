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
      @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
        @endif
        <h2 class="vehicle_title">Add a new Driver</h2>
        <div class="div_center">

            <form action="{{url('add_user')}}" method="POST" enctype="multipart/form-data">

            @csrf
                <div class="content" >
                    <label>Driver Name</label>
                    <input type:"text" name="name" placeholder="Driver's Name."></input>
                </div>
                <div class ="content">
                    <label>Driver Email</label>
                    <input type:"text" name="email" placeholder="Driver's Email"></input>
                </div>
                <div  class ="content" >
                    <label>Password</label>
                    <input type:"password" name="password" placeholder="Driver's Password"></input>
                </div>
                <div  class ="content" >
                    <label>Usertype</label>
                    <input type:"text" name="usertype" placeholder="Input: driver"></input>
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
