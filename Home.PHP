<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Rovince Hotel</title>

</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top" style="height: 200px;">
        <div class="container-fluid">
            
          <!-- <a class="navbar-brand" href="#">Offcanvas dark navbar</a> -->
          

          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder=" Type here to Search" aria-label="Search" style="height:30px ; width:200px">
            <button style="height:30px ;" class="btn btn-success" type="submit"><i class="bi bi-search" style="height: 30px; ;"></i></button>
          </form>

          <ul style="margin-top:50px">
            

            <div style="margin-right:1px ; ">
          <svg style="height: 30px;color:aliceblue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
               </svg><br> <p style="color: white;">ROVINCE OTIENO</p> 
             </div>
           
        </ul>
        
          <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="width:200px ;">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color:white ; height:auto"><i class="bi bi-person-circle"></i> <a href="login.html"><span style="color: white;">Logout</span></a>  </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dashboard
                  </a>
                 
             <ul class="dropdown-menu dropdown-menu-dark">
                  <ul>
                  <a href="list_of_customers.php">

                   <svg  style="height: 30px; color:aliceblue;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                  </svg>   </a><br>
                   <p style="color: white;">Customers</p>
                    <a href="bookings.php">
                   <svg style="height:30px ;color:aliceblue;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                   </svg> </a><p style="color: white;">Booking</p><br>

                   <svg style="height:30px ;color:aliceblue;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
  
                     </svg><br><p style="color: white;">Messages</p><br>


                     <svg   style="height:30px ;color:aliceblue;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                     </svg> <BR><p style="color: white;">Add room</p><br>
                    </ul>



            </ul>
      
              
            </div>
          </div>
        </div>
        <div>
          <ul class="nav" style="margin-top: 10px; ">
            <li class="nav-item" >
            <button class="navbar-toggler" style="margin-left: 16px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          </li>
           
         
            

          </li>
          
            
          </ul>

        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <!-- <div class="carousel-item active">
            <img src="images/2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="images/5.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="images/6.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="images/9.jpg" class="d-block w-100">
          </div> -->
          <?php
          include ('Template/banner.php');
          ?>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <header>
        <div class="overlay"></div>
        <nav>
            <!-- <h2>PICK YOUR ORDER BELOW.</h2> -->
            <ul>
                    <a href="index.html">

                    </a>

                </li>
            </ul>
        </nav>
    </header>
    
    </div>
<!-- footer element -->


<footer id="footer" class="bg-dark  text-white py-5">
  <p style="text-align: center;"> Contact and Follow us on:</p>
  <div class="container">
    <div class="row">
      <div class="col"> 
      <a href="https://www.facebook.com/search/top?q=rovince%20technosoft%20limited." target="_blank"><i class="bi bi-facebook"></i></a>
      </div>

      <div class="col">
      <a href="https://api.whatsapp.com/send?phone=254791441451" target="_blank"> <i class="bi bi-whatsapp"></i></a>

       
      </div>

      <div class="col">
        <i class="bi bi-telephone"></i>

      </div>

      <div class="col">
      <a href="mailto:okinyirovince@gmail.com" target="_blank"> <i class="bi bi-envelope"></i></a>

        
      </div>


      <div class="col">
        <i class="bi bi-twitter"></i>
      </div>

      <div class="col">
        <i class="bi bi-github"></i>
      </div>
      <div class="col">

        <i class="">FAQ</i>
      </div>

      <div class="col">

        <i class="">Support</i>
      </div>
    
    </div>
  </div>
  
<div class="copyright text-center bg-dark text-white py-2">
<p>
  &copy;Copyright@2022 All Rights Reserved, Powered by 
  <a href="https://www.facebook.com/search/top?q=rovince%20technosoft%20limited." target="_blank">Rovince Technosoft Limited</a>

</p>
</footer>
  
</div>
<!-- footer element -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="main.js"></script>
</body>
</html>