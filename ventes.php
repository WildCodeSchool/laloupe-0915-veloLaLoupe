<?php
	$menu_actif = 3;
	include('includes/header.php');
?>

	<div class="container-fluid">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center">Nos ventes</h2>
						<p class="sous-titre">Vente de vélos neufs, d'occasions, de pièces détachées et d'accessoires</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="page-header page-header-with-icon">
	            			<i class="fa fa-bicycle"></i><h3>Vente de vélos</h3>
	          			</div>
	        		</div>
	      		</div>

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


				<div class="row">
					<div class="col-md-12">
						<div class="page-header page-header-with-icon">
	            <i class="fa fa-cogs"></i><h3>Pièces détachées</h3>
	          			</div>
	        		</div>
	      		</div>


				<div class="row">
					<div class="col-md-12">
						<div class="page-header page-header-with-icon">
	            <i class="fa fa-check-square-o"></i><h3>Accessoires</h3>
	          			</div>
	        		</div>
	      		</div>


			</div>	
		</section>
	</div>
	
<?php
	include('includes/footer.php');
?>	


	