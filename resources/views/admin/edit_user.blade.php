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
            <form action="{{url('update_user', $user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <h2 class="vehicle_title">Edit User details</h2>
        <div class="div_center">

            @csrf
                <div class="content" >
                    <label>User Name</label>
                    <input type:"text" name="name" value="{{$user->name}}"></input>
                </div>
                <div class ="content">
                    <label>User Email</label>
                    <input type:"text" name="email" value="{{$user->email}}"></input>
                </div>
                <div  class ="content" >
                    <label>Usertype</label>
                    <input type:"text" name="usertype" value="{{$user->usertype}}"></input>
                </div>
                <div  class ="content" >
                    
                    <input type="submit" class="btn btn-primary"></input>
                </div>

            </form>    
    </div>

        @include('admin.footer')
  </body>
</html>
