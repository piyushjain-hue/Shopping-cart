<?php
	session_start();
	$uname=$_SESSION['username'];
	$id = $_SESSION['id'];
	if(isset($_SESSION['username'])){
		echo "<script>
            {
                alert('Welcome : $uname..you are Logged in.');
            }
            </script>";
	}
	else
	{
		echo "<script>
            {
                alert('you are Logged out..Login again..');window.location='index.php';
            }
            </script>";
	}
?>

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



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active bg-warning">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
<div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important;">
    <div class="carousel-item active" href="#demo">
    <a href="https://www.amazon.in/?tag=dealhu05-21&ascsubtag=5fcf127ccac4463cd78557d7-WEB-GET-CB-BTN-BASE_URL" target="_blank">
      <img src="images/amazon.jpg" class="col-xs-12 col-md-12 col-lg-12 col-sm-12" alt="Amazon" >
    </a>
    <div class="carousel-caption">
    	<h3> Amazon </h3>
        <p> </p>
    </div>   
</div>
<div class="carousel-item" role="listbox" style=" width:100%; margin-left: auto; margin-right: auto; height: 500px !important;">
  	<a href="https://www.flipkart.com/?affid=adminpais&affExtParam1=5fcf12accac4463cd7855812&affExtParam2=WEB-GET-CB-BTN-BASE_URL" target="_blank">
    <img src="images/fk.png"  class="col-xs-12 col-md-12 col-lg-12 col-sm-12" alt="Flipkart" >
  	</a>
    <div class="carousel-caption">
       <h3>flipkart</h3>
        <p>Welcome !</p>
    </div>   
</div>
<div class="carousel-item" role="listbox" style=" width:100%; align:center; height: 500px !important;">
   	<a href="https://www.myntra.com/?utm_source=clickonik&utm_medium=affiliate&utm_campaign=Sub_25_5fcf12bec87f17046db8b7da/" target="_blank">
    <img src="images/myntra.png" class="col-xs-12 col-md-12 col-lg-12 col-sm-12" alt="Myntra">
	</a>
<div class="carousel-caption" style="color:#000000; font-size: 25px ; align:margin-left;">
    <h3></h3>
    <p>	India's Largest Online Fashion Store</p>
    </div>   
</div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



	<section class="my-2">
	<div class="py-2">
		<h2 class="text-center"> Top Stores </h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card">
					 <a href="https://amazon.in/" target="_blank">
					 <img src="images/gallery/amazon.icon.png" class="img-fluid pb-3" alt="Card image" href="https://www.amazon.in/?tag=dealhu05-21&ascsubtag=5fcf127ccac4463cd78557d7-WEB-GET-CB-BTN-BASE_URL">
					</a>
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.amazon.in/?tag=dealhu05-21&ascsubtag=5fcf127ccac4463cd78557d7-WEB-GET-CB-BTN-BASE_URL" class="card-text">AMAZON</a>
 				 		</div>
 				 	</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card">
					 <a href="https://flipkart.com/" target="_blank">
					 <img src="images/gallery/flipkart.icon.png" class="img-fluid pb-3" alt="Card image" href="https://www.flipkart.com/?affid=adminpais&affExtParam1=5fcf12accac4463cd7855812&affExtParam2=WEB-GET-CB-BTN-BASE_URL">
					</a>
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.flipkart.com/?affid=adminpais&affExtParam1=5fcf12accac4463cd7855812&affExtParam2=WEB-GET-CB-BTN-BASE_URL" class="card-text">FLIPKART</a>
 				 		</div>
 				 	</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card">
					 <a href="https://myntra.com/" target="_blank">
					 <img src="images/gallery/myntra.icon.png" class="img-fluid pb-3" alt="Card image" href="https://www.myntra.com/?utm_source=clickonik&utm_medium=affiliate&utm_campaign=Sub_25_5fcf12bec87f17046db8b7da">
					</a>
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.myntra.com/?utm_source=clickonik&utm_medium=affiliate&utm_campaign=Sub_25_5fcf12bec87f17046db8b7da" class="card-text">MYNTRA</a>
 				 		</div>
 				 	</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card">
					 <a href="https://www.ajio.com/?utm_source=Admitad&utm_medium=Affiliate&utm_campaign=e4bea48db300a0624df996e6f2cfd4d5" target="_blank">
					 <img src="images/gallery/ajio.icon.png" class="img-fluid pb-3" alt="Card image" href="https://ajio.com">
					</a>
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.ajio.com/?utm_source=Admitad&utm_medium=Affiliate&utm_campaign=e4bea48db300a0624df996e6f2cfd4d5" class="card-text">AJIO</a>
 				 		</div>
 				 	</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card">
					 <a href="https://www.tatacliq.com/?cid=af:homepage:paisawapas:hasoffers:15032017" target="_blank">
					 <img src="images/gallery/tatacliq.icon.png" class="img-fluid pb-3" alt="Card image" href="https://tatacliq.com">
					</a>
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.tatacliq.com/?cid=af:homepage:paisawapas:hasoffers:15032017" class="card-text">TATA CLIQ</a>
 				 		</div>
 				 	</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card">
					 <a href="https://www.1mg.com/?utm_source=offline&utm_medium=paisawapas_jd&utm_campaign=jd-5fcf857abe74220b2dd7a82e" target="_blank">
					 <img src="images/gallery/1mg.icon.png" class="img-fluid pb-3" alt="Card image" href="https://1mg.com">
					</a>
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.1mg.com/?utm_source=offline&utm_medium=paisawapas_jd&utm_campaign=jd-5fcf857abe74220b2dd7a82e" class="card-text">1mg</a>
 				 		</div>
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

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Shop By Category</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-5">
					 <img src="images/gallery/tv.png" class="img-fluid pb-3" alt="Card image" >
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.amazon.in/s/ref=mega_elec_s23_3_1_1_1?rh=i%3Aelectronics%2Cn%3A1389396031&ie=UTF8&bbn=976419031" target="_blank" class="card-text">TVs from amazon.in</a>
 				 		</div>
 				 		<div class="card-body">
 				 			<a href="https://www.flipkart.com/television-store?otracker=nmenu_sub_TVs%20and%20Appliances_0_Televisions&otracker=nmenu_sub_TVs%20%26%20Appliances_0_Television" target="_blank" class="card-text">TVs from flipkart.in</a>
 				 		</div>
 				 	</div>
 			</div>
			<div class="col-lg-2 col-md-2 col-5">
					 <img src="images/gallery/smartphone.png" class="img-fluid pb-3" alt="Card image" >
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://www.amazon.in/mobile-phones/b/?ie=UTF8&node=1389401031&ref_=nav_cs_mobiles" target="_blank" class="card-text">smartphones from amazon.in</a>
 				 		</div>
 				 		<div class="card-body">
 				 			<a href="https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles" target="_blank" class="card-text">smartphones from flipkart.in</a>
 				 		</div>
 				 	</div>
 			</div>
			<div class="col-lg-2 col-md-2 col-5">
					 <img src="images/gallery/laptop.png" class="img-fluid pb-3" alt="Card image" >
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://amaozon.com/" target="_blank" class="card-text">laptops from amazon.in</a>
 				 		</div>
 				 		<div class="card-body">
 				 			<a href="https://flipkart.com/" target="_blank" class="card-text">laptops from flipkart.in</a>
 				 		</div>
 				 	</div>
 			</div>
 			<div class="col-lg-2 col-md-2 col-5">
					 <img src="images/gallery/fridge.png" class="img-fluid pb-3" alt="Card image" >
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://amaozon.com/" target="_blank" class="card-text">fridges from amazon.in</a>
 				 		</div>
 				 		<div class="card-body">
 				 			<a href="https://flipkart.com/" target="_blank" class="card-text">fridges from flipkart.in</a>
 				 		</div>
 				 	</div>
 			</div>
 			<div class="col-lg-2 col-md-2 col-5">
					 <img src="images/gallery/washing machine.png" class="img-fluid pb-3" alt="Card image" >
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://amaozon.com/" target="_blank" class="card-text">washing machines from amazon.in</a>
 				 		</div>
 				 		<div class="card-body">
 				 			<a href="https://flipkart.com/" target="_blank" class="card-text">washing machines from flipkart.in</a>
 				 		</div>
 				 	</div>
 			</div>
 			<div class="col-lg-2 col-md-2 col-5">
					 <img src="images/gallery/For more categories.png" class="img-fluid pb-3" alt="Card image" >
					 <div class="text-center">
  						<div class="card-body">
   				 			<a href="https://amaozon.com/" target="_blank" class="card-text">Visit to amazon.in</a>
 				 		</div>
 				 		<div class="card-body">
 				 			<a href="https://flipkart.com/" target="_blank" class="card-text">Visit to flipkart.in</a>
 				 		</div>
 				 	</div>
 			</div>
		</div>
	</div>
</section>

<section class="my-4">
	<div class="py-4">
		<h2 class="text-center"> Contact Us </h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<lable>Username</lable>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<lable>Email id</lable>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>

			<div class="form-group">
				<lable>Mobile</lable>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<lable>Transaction Id</lable>
				<input type="text" name="t_id" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<lable>Withdraw amount</lable>
				<input type="text" name="amount" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<lable>Comment</lable>
				<textarea class="form-control" name="comment">
				</textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@EK</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
