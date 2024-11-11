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
        <h2 class="title_deg">Current Users</h2>
        <table class="table_design">
            <tr class="th_deg">
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Type</th>
                <th>Edit Details<th>
            </tr>

            @foreach($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->usertype}}</td>
                <td>
                    <a href="{{url('edit_user', $user->id)}}" class="btn btn-success">Edit</a>
                </td>
            </tr>
            @endforeach

        </table>
        
    
    </div>
        @include('admin.footer')
  </body>
</html>
