<x-app-layout>
    <x-slot name="header">
        <h5 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __("You're logged in!") }}
        </h5>
    </x-slot>
    

   <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>-->

    <div>
    <body class="flex items-center justify-center w-screen h-screen p-10 space-x-6 bg-gray-300">

</body>
    </div>

    <style media="screen">
     @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Nunito", sans-serif;
}

body{
 min-height: 100vh;
 background: white;
 color: white;
 background-size: cover;
 background-position: center;
}

.side-bar{
 background: #1b1a1b;
 backdrop-filter: blur(15px);
 width: 250px;
 height: 100vh;
 position: fixed;
 top: 0;
 left: -250px;
 overflow-y: auto;
 transition: 0.6s ease;
 transition-property: left;
}
.side-bar::-webkit-scrollbar {
  width: 0px;
}



.side-bar.active{
 left: 0;
}
h1{

  
  font-weight: 500;
  font-size: 25px;
  padding-bottom: 20px;
  font-family: Nunito, sans-serif;
  padding-top:20px;
}

.side-bar .menu{
 width: 100%;
 margin-top: 30px;
}

.side-bar .menu .item{
 position: relative;
 cursor: pointer;
}

.side-bar .menu .item a{
 color: #fff;
 font-size: 16px;
 text-decoration: none;
 display: block;
 padding: 5px 30px;
 line-height: 60px;
}

.side-bar .menu .item a:hover{
 background: green;
 color:white;
 transition: 0.3s ease;
}

.side-bar .menu .item i{
 margin-right: 15px;
}

.side-bar .menu .item a .dropdown{
 position: absolute;
 right: 0;
 margin: 20px;
 transition: 0.3s ease;
}

.side-bar .menu .item .sub-menu{
 background: #262627;
 display: none;
}

.side-bar .menu .item .sub-menu a{
 padding-left: 30px;
}

.rotate{
 transform: rotate(90deg);
}

.close-btn{
 position: absolute;
 color: #fff;

 font-size: 23px;
 right:  0px;
 margin: 15px;
 cursor: pointer;
}

.menu-btn{
 position: absolute;
 color: rgb(0, 0, 0);
 font-size: 35px;
 margin: 25px;
 cursor: pointer;
}

.main{
 height: 100vh;
 display: flex;
 justify-content: center;
 align-items: center;
 padding: 50px;
}

.main h1{
 color: rgba(255, 255, 255, 0.8);
 font-size: 60px;
 text-align: center;
 line-height: 80px;
}

@media (max-width: 900px){
 .main h1{
   font-size: 40px;
   line-height: 60px;
 }
}

header{
  background: #33363a;
}

   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
 </head>
 <body>

   <div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>


   <div class="side-bar">

     <header>



     <div class="close-btn">

       <i class="fas fa-times"></i>
     </div>
     
          <h1>Farm Connect</h1>
        </header>
     <div class="menu">
       <div class="item"><a href="/dashboard"><i class="fas fa-desktop"></i>Dashboard</a></div>
       <div class="item">
         <a class="sub-btn"><i class="fas fa-seedling"></i>Produce<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="/addproduce" class="sub-item"><i class="fas fa-plus"></i>Add Produce</a>
           <a href="/viewproduce" class="sub-item"><i class="fas fa-expand"></i>View Produce</a>
         </div>
       </div>
       
       <div class="item">
         <a class="sub-btn"><i class="fas fa-truck"></i>Delivery<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="/calculator" class="sub-item"><i class="fas fa-money-bill"></i>Distance Estimator&Payment</a>
           <a href="/requestdelivery" class="sub-item"><i class="fas fa-truck"></i>Request Delivery</a>
         </div>
         
       </div>
       <div class="item"><a href="/track"><i class="fas fa-map-pin"></i>Track Produce</a></div>
   
       <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
     </div>
   </div>
   <section class="main">
     
   </section>

   

   <script type="text/javascript">
   $(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });
   </script>

               
            
 </body>
</x-app-layout>
