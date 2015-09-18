<?php

$menu_actif = 2;


    include('includes/header.php');

    ?>

<body>

	<div class="container-fluid">

		<div class="row bienvenue">
	        <div class="col-md-12">
	          <h2 class="text-center">Atelier<span>KM120.CYCLE</span></h2>
	          <p class="sous-titre">Vous trouverez dans cette rubrique nos differents tarifs et forfaits</p>
	        </div>
      	</div>

		<div class="container">
		    <div class="row" id="bloc1">
		      <div class="col-lg-6" id="texte_intro" >
		        <p class="texte">Besoin d'une reparation ou d'une customisation ? Nous vous proposons un ensemble de prestation pouvant répondre à vos besoins. Nous pouvons réparer, modifier
		        et entretenir vos vélos et leurs donner une seconde vie !</p>
		        
		      </div>
		      <div class="col-lg-6">
		        <img id="photo" src="images/image_mecano.jpg" alt="atelier">
		      </div>
		    </div>
		

		
		 	<div class="row">
				<div class="panel-group col-lg-6 col-xs-12" id="accordion" role="tablist" aria-multiselectable="true">
				  	<div class="panel panel-default">
				    	<div class="panel-heading" role="tab" id="headingOne">
				      		<h4 class="panel-title">
				       		<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          	Installation d'accessoires
				        	</a>
				      		</h4>
				    	</div>
				    	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				     		<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Prestations</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Pose compteur avec fil</td>
						              <td class="colonne2">5.00€</td>
						            </tr>
						            <tr>
						              <td>Pose guidoline</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Pose garde-boue / porte bagage</td>
						              <td class="colonne2">12.00€</td>
						            </tr>
						            <tr>
						              <td>Pose porte bébé</td>
						              <td class="colonne2">12.00€</td>
						            </tr>
						            <tr>
						              <td>Pose insert patte dérailleur / porte bidon</td>
						              <td class="colonne2">22.00€</td>
						            </tr>
						            <tr>
						              <td>Pose éclairage dynamo</td>
						              <td class="colonne2">30.00€</td>
						            </tr>
						        </table>
				      		</div>
				    	</div>
				  	</div>


					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          	Reparations
					        	</a>
					      	</h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      	<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Nos forfaits</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Pneumatique</td>
						              <td class="colonne2">8.00€</td>
						            </tr>
						            <tr>
						              <td>Transmission</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Freinage</td>
						              <td class="colonne2">15.00€</td>
						            </tr>
						            <tr>
						              <td>Changement d'un dérailleur</td>
						              <td class="colonne2">29.00€</td>
						            </tr>
						            <tr>
						              <td>Remise en état</td>
						              <td class="colonne2">55.00€</td>
						            </tr>
					            </table>
					    	</div>
					    </div>
					</div>


					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          	Entretiens
					        	</a>
					      	</h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      	<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Nos forfaits</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Entretien loisir</td>
						              <td class="colonne2">26.00€</td>
						            </tr>
						            <tr>
						              <td>Entretiens urbain / route</td>
						              <td class="colonne2">35.00€</td>
						            </tr>
						            <tr>
						              <td>Entretien competition</td>
						              <td class="colonne2">75.00€</td>
						            </tr>
					            </table>
					      	</div>
					    </div>
					</div>


					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingFour">
					      	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					          	Service Express
					        	</a>
					      	</h4>
					    </div>
					    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					      	<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Nos services Express</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Changement collier de selle</td>
						              <td class="colonne2">2.50€</td>
						            </tr>
						            <tr>
						              <td>Changement pédales</td>
						              <td class="colonne2">3.00€</td>
						            </tr>
						            <tr>
						              <td>Montage 1 accessoire</td>
						              <td class="colonne2">3.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 chambre ou 1 pneu</td>
						              <td class="colonne2">5.00€</td>
						            </tr>
						            <tr>
						              <td>Changement de selle</td>
						              <td class="colonne2">6.00€</td>
						            </tr>
						            <tr>
						              <td>Changement tige de selle</td>
						              <td class="colonne2">7.00€</td>
						            </tr>
						            <tr>
						              <td>Changement de selle</td>
						              <td class="colonne2">7.00€</td>
						            </tr>
						            <tr>
						              <td>Forfait réglage de freins</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Forfait réglage dérailleurs</td>
						              <td class="colonne2">10.00€</td>
						            </tr>				          
					            </table>
					      	</div>
					    </div>
					</div>
				</div>


			

				<div class="panel-group col-lg-6 col-xs-12" id="accordion2" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingFive">
					    	<h4 class="panel-title">
					        	<a class="collapsed"role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
					          	Prestations roues
					        	</a>
					    	</h4>
					    </div>
					    <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
					      	<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Prestations</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Devoilage de roue</td>
						              <td class="colonne2">6.50€</td>
						            </tr>
						            <tr>
						              <td>Changement / montage roue libre / K7</td>
						              <td class="colonne2">7.00€</td>
						            </tr>
						            <tr>
						              <td>Changement rayon + dévoilage</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Serrage moyeu</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Reparation pneu tubeless</td>
						              <td class="colonne2">13.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 boyau</td>
						              <td class="colonne2">16.00€</td>
						            </tr>
					            </table>
					      	</div>
					    </div>
					</div>


					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingSix">
					    	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					          	Prestations cadre
					        	</a>
					    	</h4>
					    </div>
					    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
					    	<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Prestation</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Changement carter vélo</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Montage entretoise de direction</td>
						              <td class="colonne2">7.00€</td>
						            </tr>
						            <tr>
						              <td>Réglage jeu de direction</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Changement de biellette de cadre</td>
						              <td class="colonne2">14.00€</td>
						            </tr>
						            <tr>
						              <td>Changement cintre VTT</td>
						              <td class="colonne2">6.00€</td>
						            </tr>
						            <tr>
						              <td>Changement amortisseur central cadre</td>
						              <td class="colonne2">15.00€</td>
						            </tr>
						            <tr>
						              <td>Changement potence</td>
						              <td class="colonne2">7.00€</td>
						            </tr>
						            <tr>
						              <td>Graissage boitier de pédalier ou jeu de direction</td>
						              <td class="colonne2">19.00€</td>
						            </tr>
						            <tr>
						              <td>Graissage axe pédale automatique</td>
						              <td class="colonne2">21.00€</td>
						            </tr>
						            <tr>
						              <td>Changement cage à billes jeu de direction</td>
						              <td class="colonne2">23.00€</td>
						            </tr>
						            <tr>
						              <td>Changement jeu de direction</td>
						              <td class="colonne2">26.00€</td>
						            </tr>
						            <tr>
						              <td>Changement cintre route</td>
						              <td class="colonne2">30.00€</td>
						            </tr>
						            <tr>
						              <td>Changement fourche</td>
						              <td class="colonne2">40.00€</td>
						            </tr>
						            <tr>
						              <td>Changement roulement de cadre</td>
						              <td class="colonne2">43.00€</td>
						            </tr>
						            <tr>
						              <td>Changement de triangle arrière</td>
						              <td class="colonne2">54.00€</td>
						            </tr>
						            <tr>
						              <td>Montage vélo complet</td>
						              <td class="colonne2">120.00€</td>
						            </tr>
						            <tr>
						              <td>Changement de cadre</td>
						              <td class="colonne2">130.00€</td>
						            </tr>
					            </table>
					    	</div>
					    </div>
					</div>


					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingSeven">
					    	<h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					         	Prestations Transmission
					        	</a>
					    	</h4>
					    </div>
					    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
					    	<div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Prestations</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Changement collier anti saut de chaîne</td>
						              <td class="colonne2">8.00€</td>
						            </tr>
						            <tr>
						              <td>Chagement 1 couronne pédalier</td>
						              <td class="colonne2">9.00€</td>
						            </tr>
						            <tr>
						              <td>Chagement 1 manivelle</td>
						              <td class="colonne2">10.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 cable et 1 gaine</td>
						              <td class="colonne2">11.00€</td>
						            </tr>
						            <tr>
						              <td>Serrage boitier pédalier</td>
						              <td class="colonne2">14.00€</td>
						            </tr>
						            <tr>
						              <td>Changement galets de derailleur</td>
						              <td class="colonne2">15.00€</td>
						            </tr>
						            <tr>
						              <td>Changement paire de manivelles</td>
						              <td class="colonne2">15.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 patte de derailleur + reglage</td>
						              <td class="colonne2">14.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 derailleur</td>
						              <td class="colonne2">14.00€</td>
						            </tr>
						            <tr>
						              <td>Changement boitier de pédalier</td>
						              <td class="colonne2">17.00€</td>
						            </tr>
						            <tr>
						              <td>Changement manette dérailleur VTT</td>
						              <td class="colonne2">18.00€</td>
						            </tr>
					            </table>
					    	</div>
						</div>
					</div>


					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingEight">
					    	<h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					          Prestations freinage
					        </a>
					    	</h4>
					    </div>
					    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
					        <div class="panel-body" style="color: black;">
					        	<table>
						            <tr>
						              <th>Prestations</th>
						              <th>Prix</th>
						            </tr>
						            <tr>
						              <td>Changement 1 paire de paquettes de frein</td>
						              <td class="colonne2">6.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 paire de patins de freins</td>
						              <td class="colonne2">7.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 disque de frein</td>
						              <td class="colonne2">13.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 levier de frein VTT</td>
						              <td class="colonne2">14.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 levier de frein à disque</td>
						              <td class="colonne2">15.00€</td>
						            </tr>
						            <tr>
						              <td>Purge de frein hydraulique</td>
						              <td class="colonne2">17.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 2 gaines et câbles</td>
						              <td class="colonne2">20.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 durite de frein hydraulique</td>
						              <td class="colonne2">20.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 paire de levier de frein VTT</td>
						              <td class="colonne2">20.00€</td>
						            </tr>
						            <tr>
						              <td>Changement frein à tambour</td>
						              <td class="colonne2">23.00€</td>
						            </tr>
						            <tr>
						              <td>Changement 1 levier STI / ERGOPOWER</td>
						              <td class="colonne2">26.00€</td>
						            </tr>
						            <tr>
						              <td>Changement chambre ou pneu (frein à tambour)</td>
						              <td class="colonne2">16.00€</td>
						            </tr>
						            <tr>
						              <td>Changement roue arrière (frein tambour)</td>
						              <td class="colonne2">16.00€</td>
						            </tr>
						            <tr>
						              <td>Graissage moyeu</td>
						              <td class="colonne2">23.00€</td>
						            </tr>
						        </table>
					        </div>
					    </div>
					</div>
				</div>			
			</div>	
		</div>
	</div>
<?php

    include('includes/footer.php');

?>