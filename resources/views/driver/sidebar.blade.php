<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
          <div class="title">
            <h1 class="h5">{{  Auth::user()->name }}</h1>
            <p>Driver</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"> <a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('/view_delivery')}}"> <i class="fa fa-bar-chart"></i>Delivery Orders </a></li>
                
                <li><a href="{{url('/view_vehicle')}}"> <i class="fa fa-bar-chart"></i>View Vehicles </a></li>
                
                    
                  </ul>
                </li>
                
        
        
      </nav>