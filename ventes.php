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
				<div class="col-md-5 col-sm-5 col-xs-5"><hr>
				</div>
	      <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-bicycle section-icone"></i>
	      </div>
	      <div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
	    </div>
      <!-- Fin Bidouille separateur de section -->
		</div><!-- Fin .container -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="produits">
						<h3 class="text-center">Ventes de vélos neufs</h3>
						<p>
							Nous vous proposons le conseil et la vente de tout type de vélos. Nous travaillons avec plusieurs marques spécialisées
							afin de vous proposer des vélos accessibles à tous les budgets et à tous les usages. Nos marques nous livrent plus de 250 modèles 
							différents sous 48h. N'hésitez pas à nous contacter pour toutes informations sur nos produits.
						</p>
						<div class="carouselVente">
							<div class="item">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
									<h4>Vélos Urbains</h4>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
									<h4>Vélos de Routes</h4>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
									<h4>Vélos Enfants / Juniors</h4>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
									<h4>Vélos Tout Terrain</h4>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
									<h4>VTC Trekking</h4>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/velo1.jpg" class="img-responsive img-rounded" />
									<h4>VTC Sport</h4>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
						</div><!-- Fin .carouselVente -->
					</div><!-- Fin .produits -->
				</div><!-- Fin .col-md-12 -->
			</div><!-- Fin .row -->
		</div><!-- Fin .container -->
		
		<div class="container">
			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5"><hr>
				</div>
	      <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-cogs section-icone"></i>
	      </div>
	      <div class="col-md-5 col-sm-5 col-xs-5"><hr>
	      </div>
	    </div>
	    <!-- Fin Bidouille separateur de section -->
	  </div><!-- Fin .container -->

	  <div class="container">
	    <div class="row">
	    	<div class="col-md-12">
	    		<h3 class="text-center titre-section">Ventes de vélos d'occasions</h3>
	    		<p>Tous nos vélos d'occasions sont entièrement révisés et en parfait état de fonctionnement. N'hésitez pas à nous contacter 
	    			pour toute information complémentaire.</p>
	    	</div>
	    </div><!-- Fin .row -->
	    <div class="row">
	    	<div class="col-md-3 col-sm-6 col-xs-12">
	    		<div class="fiche-occasion">
	    			<h4 class="titre-occasion text-center">Marque du velo</h4>
						<img src="images/velo1.jpg" class="img-responsive" alt="">
						<div class="row">
							<div class="col-md-12">
								<p>Prix : <b>1.800€ TTC</b></p>
							</div>
						</div>
						<!-- Bouton execution modal -->
						<button class="btn btn-default btn-lg pull-right" data-toggle="modal" data-target="#myModal">Voir la fiche produit</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Mon vélo a vendre</h4>
									</div>
									<div class="modal-body descriptif">
										<div class="row">
											<div class="col-md-5">
												<img src="images/velo1.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-md-7">
												<h4>Descriptif :</h4>
													<p>
														Etat : Neuf<br />
														Famille-Produit : VTT<br />
														Couleur : Rouge / Noir / Blanc<br />
														Matière : Carbone<br />
														Poids : 8kg<br />
														Mise en circulation : 06/2011
													</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p>A vendre vélo en carbone en très bon état et très bien entretenu. Vendu sans pédale, avec 2 porte-bidon 
													elite custom race noir. Monté sur plateau 50/36, je vends avec les plateaux de 46 et 34 compris dans le prix (développement 
													minimes et cadets pour ceux qui font de la compétition) + monté avec cassette 14-28 et 14-25.</p>
											</div>
										</div>
									</div>
									<div class="modal-footer">
        						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      						</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div><!-- Fin .fiche-occasion -->
				</div><!-- Fin .col -->
				<div class="col-md-3 col-sm-6 col-xs-12">
	    		<div class="fiche-occasion">
	    			<h4 class="titre-occasion text-center">Marque du velo</h4>
						<img src="images/velo1.jpg" class="img-responsive" alt="">
						<div class="row">
							<div class="col-md-12">
								<p>Prix : <b>1.800€ TTC</b></p>
							</div>
						</div>
						<!-- Bouton execution modal -->
						<button class="btn btn-default btn-lg pull-right" data-toggle="modal" data-target="#myModal">Voir la fiche produit</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Mon vélo a vendre</h4>
									</div>
									<div class="modal-body descriptif">
										<div class="row">
											<div class="col-md-5">
												<img src="images/velo1.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-md-7">
												<h4>Descriptif :</h4>
													<p>
														Etat : Neuf<br />
														Famille-Produit : VTT<br />
														Couleur : Rouge / Noir / Blanc<br />
														Matière : Carbone<br />
														Poids : 8kg<br />
														Mise en circulation : 06/2011
													</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p>A vendre vélo en carbone en très bon état et très bien entretenu. Vendu sans pédale, avec 2 porte-bidon 
													elite custom race noir. Monté sur plateau 50/36, je vends avec les plateaux de 46 et 34 compris dans le prix (développement 
													minimes et cadets pour ceux qui font de la compétition) + monté avec cassette 14-28 et 14-25.</p>
											</div>
										</div>
									</div>
									<div class="modal-footer">
        						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      						</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div><!-- Fin .fiche-occasion -->
				</div><!-- Fin .col -->
			</div><!-- Fin .row -->
		</div><!-- Fin .container -->

		

		<div class="container">
			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5"><hr>
				</div>
	      <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-cogs section-icone"></i>
	      </div>
	      <div class="col-md-5 col-sm-5 col-xs-5"><hr>
	      </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<h3 class="text-center titre-section">Pièces détachées</h3>
	    	</div>
	    </div>
	   	<!-- Fin Bidouille separateur de section -->
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-md-3 col-sm-6 col-xs-12">
		    			<button type="button" class="btn btn-default block-center" data-container="body" data-toggle="popover" data-placement="bottom" data-content="cadres et fourches">
							<img src="images/cadre.jpg" alt="Cadre de vélo" class="pieces-detachees" />
						</button>
		    		</div>

		    		<div class="col-md-3 col-sm-6 col-xs-12">
		    			<button type="button" class="btn btn-default block-center" data-container="body" data-toggle="popover" data-placement="bottom" 
		    				data-content="pédaliers, leviers, dérailleurs avant, dérailleurs arrière, freins (à disque), plateaux, cassettes, chaînes">
	  						<img src="images/pedalier.jpg" alt="Pédalier de vélo" class="pieces-detachees" />
						</button>
		    		</div>

		    		<div class="col-md-3 col-sm-6 col-xs-12">
		    			<button type="button" class="btn btn-default block-center" data-container="body" data-toggle="popover" data-placement="bottom" 
		    				data-content="roues, pneus, boyaux">
	  						<img src="images/roue.jpg" alt="Roue de vélo" class="pieces-detachees" />
						</button>
		    		</div>

		    		<div class="col-md-3 col-sm-6 col-xs-12">
		    			<button type="button" class="btn btn-default block-center" data-container="body" data-toggle="popover" data-placement="bottom" 
		    				data-content="selles, potences, cintres, tiges de selle">
	  						<img src="images/selle.jpg" alt="Selle de vélo" class="pieces-detachees" />
						</button>
		    		</div>
		    	</div>
		    </div>
		</div><!-- Fin .container -->
		

		
		<div class="container">
			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5"><hr>
				</div>
        <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-plus-square-o section-icone"></i>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5"><hr>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<h3 class="text-center titre-section">Accessoires</h3>
      		<div class="carouselVente">
							<div class="item">
									<img src="images/accessoire1.jpg" class="img-responsive img-rounded img-accesoires" />
									<h4>Prolongateur de cintre vaclo</h4>
									<div class="votes">
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star-o" style="color: #ffff00;"></i>
									</div>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/accessoire2.jpg" class="img-responsive img-rounded img-accesoires" />
									<h4>Vélos de Routes</h4>
									<div class="votes">
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star-empty" style="color: #ffff00;"></i>
									</div>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 990</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/accessoire3.jpg" class="img-responsive img-rounded img-accesoires" />
									<h4>Vélos Enfants / Juniors</h4>
									<div class="votes">
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star-empty" style="color: #ffff00;"></i>
									</div>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 90</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/accessoire4.jpg" class="img-responsive img-rounded img-accesoires" />
									<h4>Vélos Tout Terrain</h4>
									<div class="votes">
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star-empty" style="color: #ffff00;"></i>
									</div>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 90</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/accessoire5.jpg" class="img-responsive img-rounded img-accesoires" />
									<h4>VTC Trekking</h4>
									<div class="votes">
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star-empty" style="color: #ffff00;"></i>
									</div>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 90</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
							<div class="item">
									<img src="images/accessoire6.jpg" class="img-responsive img-rounded img-accesoires" />
									<h4>VTC Sport</h4>
									<div class="votes">
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star" style="color: #ffff00;"></i>
										<i class="fa fa-star-empty" style="color: #ffff00;"></i>
									</div>
									<div class="produits-prix">
										<span>A partir de</span>
										<p>€ 90</p>
										<a href="contact.php" title="">En savoir +</a>
									</div>
							</div>
						</div><!-- Fin .carouselVente -->
					</div>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->
		</div>
				
		
	</div><!-- Fin .container-fluid -->

<?php
	include('includes/footer.php');
?>	


	