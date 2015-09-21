<?php
	session_start();
?>

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
				<div class="col-md-2 logo">
					<h2 class="titre-logo">KM120<br /><span>.CYCLES</span></h2>
				</div>

				<div class="col-md-7 col-md-offset-3 header-right">
				<h3 class="pull-right">Gérald MILTGEN</br />Réparation et ventes de vélos à La Loupe</h3>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-inverse afix-top" role="banner" id="topnavbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        	</button>
          <a class="navbar-brand" href="index.html"></a>
        </div>
				
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li <?php echo (isset($menu_actif) && $menu_actif == 1) ? "class='active'" : ''; ?>><a href="index.php"><i class="fa fa-home"></i> ACCUEIL</a></li>
            <li <?php echo (isset($menu_actif) && $menu_actif == 2) ? 'class="active"' : ''; ?>><a href="atelier.php">ATELIER</a></li>
            <li <?php echo (isset($menu_actif) && $menu_actif == 3) ? 'class="active"' : ''; ?>><a href="ventes.php">VENTES</a></li>
            <li <?php echo (isset($menu_actif) && $menu_actif == 4) ? 'class="active"' : ''; ?>><a href="promotion.php">PROMOTIONS</a></li>
            <li <?php echo (isset($menu_actif) && $menu_actif == 5) ? 'class="active"' : ''; ?>><a href="contact.php">CONTACT</a></li>                       
          </ul>
        </div>
      </div><!--/.container-->
    </nav><!--/nav-->
	</header>
	