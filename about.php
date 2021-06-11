<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />
</head>
<body>

<?php
  //session_start();
  //$uname=$_SESSION['username'];
  //$id = $_SESSION['id'];
//  if(isset($_SESSION['username'])){
    //echo "<script>
            //{
                //alert('Welcome : $uname....  you are Logged in.');
            //}
            //</script>";
  //}
  //else
  //{
    //echo "<script>
            //{
                //alert('you are Logged out...Login again');window.location='index.php';
            //}
            //</script>";
  //}
?>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="Welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
          
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<section class="my-2">
  <div class="py-2">
    <h2 class="text-center">How Do We Provide Cashback? </h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">

        <div class="card">
           <img class="card-img-top" src="images/gallery/search.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title"> Login Browse Offers from 350+ Online Stores.</h4>
                <p class="card-text"> </p>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">

        <div class="card">
           <img class="card-img-top" src="images/gallery/shop.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title"> Shop at any Store after Redirecting via our site.</h4>
                <p class="card-text"> </p>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">

        <div class="card">
           <img class="card-img-top" src="images/gallery/cashback.png" alt="Card image">
              <div class="card-body">
                <h4 class="card-title"> Cashback will be tracked in 24-48 hours & then after a period Redeem Earned Cashback to Bank Account.</h4>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-6">
      <img src="images/EK.png" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Hello...   :) </h2>
      <p class="py-5">buy any of product from any e-commers websites through our affiliate website and get some money as cashback!..</p>
      <a href="about.php" class="btn btn-success"> check More </a>
    </div>

  </div>
  </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@EkearnKaro </p>
  <div>
  	
  </div>
</footer>

</body>
</html>