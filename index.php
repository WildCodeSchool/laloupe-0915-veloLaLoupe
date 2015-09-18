<?php
	$menu_actif = 1;
	include('includes/header.php');
?>
<div class="container-fluid">
	<div id="carousel-example-generic" class="carousel slide vertical" data-ride="carousel">
		<!-- Wrapper for slides --> 
		<div class="carousel-inner" role="listbox">
		  <div class="item active photos">
		    <img src="images/1.jpg" style="width: 100%" alt="...">
		    <div class="carousel-caption">
		    	<div class="row">
		    		<div class="col-md-6">
		    			<img src="images/devanture.jpg" alt="" style="width: 250px; height: 150px;">
		    			<h2>Un titre dans le slider</h2>
		    			<h3>Un sous-titre</h3>
		    			<h3>Un autre sous-titre</h3>
		    		</div>
		    		<div class="col-md-6">
		    			<h2 class="titre-slider">TEST</h2>
		    		</div>
		    	</div>
		    </div>
		  </div>
		  <div class="item photos">
		    <img src="images/2.jpg" style="width: 100%" alt="...">
		  </div>
		  <div class="item photos">
		    <img src="images/3.jpg" style="width: 100%" alt="...">
		  </div>
		</div>
	</div>
	
	<section>
		<!-- bienvenue -->
		<div class="container">

			<div class="row bienvenue">
				<div class="col-md-12">
					<h2 class="text-center">Bienvenue chez <span>KM120.CYCLE</span></h2>
					<p class="sous-titre">Réparations, ventes, entretien et gardiennage de votre vélo</p>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="page-header page-header-with-icon">
            <i class="fa fa-star"></i><h3>Un professionnel à votre Service</h3>
          </div>
        </div>
      </div>

      <div class="row presentation">
      	<div class="col-md-7">
					<p>
						La vente de vélos et d'accessoires pour tout âge, l"entretien et la réparation, ainsi que des conseils personnalisés autour du vélo et de son utilisation.
							La qualité du service et des produits, le souci de la satisfaction de la clientèle, sont les principes essentiels de mon engagement.
							Aussi je mets à votre disposition mon expérience, afin de vous proposer des produits de qualité, pour répondre à vos besoins et attentes.
					</p>

					<div class="row">
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li>test</li>
								<li>test</li>
								<li>test</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li>test</li>
								<li>test</li>
								<li>test</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-5">
						<img src="images/devanture.jpg" class="img-responsive img-rounded" alt="Devanture">
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="accueil">
			<div class="container">	
				
				<div class="row">
					<div class="col-md-12">
						<div class="page-header page-header-with-icon">
	            <i class="fa fa-map-marker"></i><h3>Notre magasin à La Loupe</h3>
	          </div>
	        </div>
      	</div>

				<div class="row">
					<div class="col-md-6">
						<div id="map" style="width: 100%; height: 450px;"></div>
					</div>
					<div class="col-sm-6">

            <div class="row liste-icones">
              <div class="col-sm-12 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-clock-o text-white"></i>
                </div>
                <h4>Nos Horaires</h4>
                <ul class="list-unstyled">
	                <li>
	                  Lundi, Mercredi, Vendredi &mdash;
	                  <strong>10:00 - 19:00</strong>
	                </li>
	                <li>
	                Mardi &mdash;
	                <strong>09:00 - 19:00</strong>
	                </li>
	                <li>
	                	Samedi
	                	&mdash;
	                	<strong>10:00 - 19:00</strong>
	                </li>
	                <li>
	                	Jeudi, Dimanche, Jours fériés
	                	&mdash;
	                	<strong>Fermé</strong>
	                </li>
              	</ul>
              </div>
            </div>

						<div class="row liste-icones"> 
              <div class="col-sm-4 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-phone text-white"></i>
                </div>
                <h4>Téléphone</h4>
                <ul class="list-unstyled">
                  <li>02.37.XX.XX.XX.</li>
                  <li>06.47.73.10.64</li>
                </ul>
              </div>
              <div class="col-sm-4 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-envelope text-white"></i>
                </div>
                <h4>Mail</h4>
                <ul class="list-unstyled">
                  <li><a href="mailto:km120.cycle@gmail.com">km120.cycle@gmail.com</a></li>
                  <li><a href="mailto:site@domaine.fr">site@domain.fr</a></li>
                </ul>
              </div>
              <div class="col-sm-4 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-map-marker text-white"></i>
                </div>
                <h4>Adresse</h4>
                <ul class="list-unstyled">
                  <li>18 rue de la gare</li>
                  <li>28240 La Loupe</li>
                </ul>
              </div>
            </div>

          </div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center separateur"><i class="fa fa-comments-o"></i>Nos témoignages clients</h3>
				</div>
			</div>

			
		  <div class="row">
		    <div class="col-md-12">
		      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        <!-- Bottom Carousel Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
		          <li data-target="#quote-carousel" data-slide-to="1"></li>
		          <li data-target="#quote-carousel" data-slide-to="2"></li>
		        </ol>
		        
		        <!-- Carousel Slides / Quotes -->
		        <div class="carousel-inner">
		        
		          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
		                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
		                </div>
		                <div class="col-sm-9">
		                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
		                  <small>Someone famous</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 2 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-9">
		                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
		                  <small>Someone famous</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 3 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-9">
		                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor.</p>
		                  <small>Someone famous</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		        </div>
		        
		        <!-- Carousel Buttons Next/Prev -->
		        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
		        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
		      </div>                          
		    </div>
		  </div>

		</div>
	</section>
</div>
	
<?php
	include('includes/footer.php');
?>	


	