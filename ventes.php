<?php
	$menu_actif = 3;
	include('includes/header.php');
?>

	<div class="container-fluid">
		
			<div class="container">
				<div class="row bienvenue">
					<div class="col-md-12">
						<h2 class="text-center">Les ventes <span>KM120.CYCLE</span></h2>
						<p class="sous-titre">Vente de vélos neufs, d'occasions, de pièces détachées et d'accessoires</p>
					</div>
				</div>

				<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5"><hr></div>
        <div class ="col-md-2 text-center">
					<i class="fa fa-bicycle section-icone"></i>
        </div>
        <div class="col-md-5"><hr></div>
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<h3 class="text-center titre-section">Nos ventes de vélos</h3>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->

	      		<div class="col-md-12">
					<!-- Navigation des onglets -->
					<ul class="nav nav-tabs">
					    <li class="active"><a href="#home" data-toggle="tab" class="navtab-onglet">Occasions</a></li>
					    <li><a href="#profile" data-toggle="tab" class="navtab-onglet">Neufs</a></li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<div class="container">	
							<div class="row">
								<div class="col-md-4">
									<a href=""><img src="images/velo1.jpg" class="img-responsive img-rounded" /></a>
								</div>
								<div class="col-md-4">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
								</div>
								<div class="col-md-4">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
								</div>
							</div>
						</div>	

					</div>
					<div id="profile" class="tab-pane fade">
						<p>Aucun vélo en stock pour le moment...</p>
					</div>
				</div>


				<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5"><hr></div>
        <div class ="col-md-2 text-center">
					<i class="fa fa-cogs section-icone"></i>
        </div>
        <div class="col-md-5"><hr></div>
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<h3 class="text-center titre-section">Pièces détachées</h3>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->


			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5"><hr></div>
        <div class ="col-md-2 text-center">
					<i class="fa fa-plus-square-o section-icone"></i>
        </div>
        <div class="col-md-5"><hr></div>
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<h3 class="text-center titre-section">Accesoires</h3>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->


			</div>	
		
	</div>
	
<?php
	include('includes/footer.php');
?>	


	