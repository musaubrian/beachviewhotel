<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <title>     Beach View Hotel</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header" >

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top" style="height: 100px;">
  <div class="container-fluid">
  <!-- <img src="./assets/logo3.jpg" alt="Banner1" style="height:100px;width:220px;border-radius:40px;"> -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <i class="bi bi-list" style="color: whitesmoke;"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" style="color: White;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="chart.php" style="color: White;">comment</a>
        </li>
        
      </ul>
      
    </div>
    <form action="#" class="font-size-14 font-rale" style="margin-right:50px ;">
            <small> <a href="cart.php" style="font-size: 20px; color: white;" > Booking Slip</a></small>
          <span
            id="cart-count"
            style="font-size: small ; color:white ;background-color:red;"
            class="position-absolute top-0 translate-middle badge rounded-pill bg-success px-3 py-2 "
            >
            <?php echo count($product->getData('cart')); ?>
              <span class="visually-hidden"></span>
         </span>
            </form>
            <a style="color:white ;" href="login.php">Logout</a>
  </div>
</nav>
    <!-- !Primary Navigation -->
  
</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">

