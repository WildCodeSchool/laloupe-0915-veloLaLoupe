<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/flexslider.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
</head>
<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<h2><span>KM120</span><br />.CYCLES</h2>
				</div>

				<div class="col-md-6 col-md-offset-4 header-right">
				<h3>Gérald MILTGEN</br />Réparation et ventes de vélos à La Loupe</h3>
				</div>
			</div>
		</div>

			<nav class="navbar navbar-default affix-top" role="navigation" id="topnavbar">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
		      		<a class="navbar-brand" href="#">Brand</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="#">Accueil</a></li>
			        <li><a href="#">Atelier</a></li>
			        <li><a href="#">Ventes</a></li>
			        <li><a href="#">Qui suis-je</a></li>
			        <li><a href="#">Contact</a></li>
			       </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	</header>

	<div id="carousel-example-generic" class="carousel slide vertical" data-ride="carousel">


	<section>
		<!-- welcome-box -->
		<div class="bienvenue">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center">Bienvenue chez <span>KM120.CYCLE</span></h2>
						<p class="text-center">We’re an interactive agency specialising in lean UX and intelligent product and identity design</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	  <!-- Wrapper for slides --> 
	 <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="images/1.jpg" alt="...">
	    </div>
	    <div class="item">
	      <img src="images/2.jpg" alt="...">
	    </div>
	   	<div class="item">
	      <img src="images/3.jpg" alt="...">
	    </div>
	 </div>


	
	<?php
		include('includes/footer.php');
	?>	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/script2.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script>
      	$('#topnavbar').affix({
          	offset: 15
      	});
	</script>

	<script>
		$('.carousel').carousel({
   			interval: 5000
   		});
	</script>


</body>
</html>