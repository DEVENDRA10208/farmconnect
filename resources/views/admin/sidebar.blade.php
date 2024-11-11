<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
          <div class="title">
            <h1 class="h5">{{  Auth::user()->name }}</h1>
            <p>Administrator</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"> <a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('vehicle_page')}}"> <i class="icon-grid"></i>Add Vehicle </a></li>
                <li><a href="{{url('/show_vehicle')}}"> <i class="fa fa-bar-chart"></i>View Vehicles </a></li>
                <li><a href="{{url('/show_delivery')}}"> <i class="fa fa-bar-chart"></i>Delivery Orders </a></li>
                <li><a href="{{url('/user_page')}}"> <i class="fa fa-bar-chart"></i>Add Driver </a></li>
                
                
                
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Profiles </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('/show_user')}}"> Users</a></li>
                   <!-- <li><a href="{{url('/show_user')}}"> Add Driver</a></li> -->
                    
                    
                  </ul>
                </li>
                
        
        
      </nav>