<x-app-layout>

    <style>
        .styled-table {
            font:Nunito;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: green;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
/* Dropdown Button */
.dropbtn {
  background-color: green;
  color: white;
  padding: 16px;
  font-size: 16px;
  border-radius:5px;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: black;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
button {
  background-color: white;
  color: black;
  border-radius:5px;
  border: 2px solid #4CAF50 ; /* Green */
}
    </style>
    <h1><b>View Produce</b></h1>
    <table class="styled-table">
                  <thead>  <tr >
                  <th >ID</th>
                        <th >Name</th>
                        <th >Description</th>
                        <th >Price</th>
                        <th >Certification</th>
                        <th >Image</th>
                        <th>Action</th>
                      
                        
                    </tr>
</thead>
                    @foreach($produces as $produce)
    
                    <tr>
                    <td>{{$produce->id}}</td>
                        <td>{{$produce->produce_name}}</td>
                        <td>{{$produce->produce_desc}}</td>
                        <td>{{$produce->produce_price_per_kg}}</td>
                        <td>{{$produce->produce_certification}}</td>
                        <td><img src="/uploadimages/{{$produce ->produce_image}}" width="100" height="100"/></td>
                        <td><button><a href = 'produceedit/{{ $produce->id }}'>Update</a></button>
                        <td><button><a href="viewproduce" 
                   onclick="event.preventDefault();
                    document.getElementById(
                      'delete-form-{{$produce->id}}').submit();">
                 Delete 
                </a></button>
            </td>
            <form id="delete-form-{{$produce->id}}" 
                  + action="{{route('viewproduce.destroy', $produce->id)}}"
                  method="post">
                @csrf @method('DELETE')
            </form>   
                       
   

                        </td>
                            

                        
                    </tr>
    
                    @endforeach
    
                    
    
                </table>
                <form method="GET" action="/calculator">
      @csrf
      
        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('Proceed to Request Delivery') }}
            </x-primary-button>
        </div>
    </form>
                <script>
                    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
                </script>
               
</x-app-layout>