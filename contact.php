<?php
session_start();
	include('includes/header.php');
?>

<?php
          if(isset($_SESSION['confirmation']) && !empty($_SESSION['confirmation']))
            {
              echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>' . $_SESSION['confirmation'] . '</center></div>';
            /*'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Félicitations !</h4>
              </div>
              <div class="modal-body">
              <div class="alert alert-success" role="alert"><center>' . $_SESSION['confirmation'] . '</center></div>
              </div>
              </div>
              </div>
              </div>';*/            
            } 
          elseif(isset($_SESSION['erreur']) && !empty($_SESSION['erreur'])) 
            {
              echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>' . $_SESSION['erreur'] . '</center></div>';
            /*'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Attention !</h4>
              </div>
              <div class="modal-body">
              <div class="alert alert-danger" role="alert"><center>' . $_SESSION['erreur'] . '</center></div>
              </div>
              </div>
              </div>
              </div>';*/

            }
          else
            {
              if(isset($_SESSION['non_valide']) && !empty($_SESSION['non_valide']))
             	{
                echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><center>' . $_SESSION['non_valide'] . '</center></div>';
            /*'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Attention !</h4>
              </div>
              <div class="modal-body">
              <div class="alert alert-danger" role="alert"><center>' . $_SESSION['non_valide'] . '</center></div>
              </div>
              </div>
              </div>
              </div>';*/              
              
            	} 
            } 
?>

	<section>
		<div class="row">
			<div class="col-md-6">
		          <form action="traitement.php" method="POST">
		              <div class="input-group">
		                  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
		                  <input type="text" class="form-control formulaire-contact" placeholder="Nom" name="nom" maxLength="25" aria-describedby="basic-addon1" />
		              </div><br />
		              <div class="input-group">
		                  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
		                  <input type="text" class="form-control formulaire-contact" placeholder="Prénom" name="prenom" maxLength="25" aria-describedby="basic-addon1" />
		              </div><br />
		              <div class="input-group">
		                  <span class="input-group-addon" id="basic-addon1">@</span>
		                  <input type="email" class="form-control formulaire-contact" placeholder="Adresse email" name="email" maxLength="60" aria-describedby="basic-addon1" />
		              </div><br />
		              <div class="input-group">
		                  <span class="input-group-addon" id="basic-addon1">@</span>
		                  <input type="email" class="form-control formulaire-contact" placeholder="Confirmez l'adresse email" name="email_confirm" maxLength="60" aria-describedby="basic-addon1" />
		              </div><br />
		              <div class="input-group">
		                  <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-phone"></i></span> <!-- Ajouter glyphicon a span avec balise i -->
		                  <input type="email" class="form-control formulaire-contact" placeholder="Téléphone" name="telephone" maxLength="10" aria-describedby="basic-addon1" />
		              </div>
		              <br />
			          <div class="form-group">
			              <textarea class="form-control" rows="5" id="comment" name="message" placeholder="Votre message"></textarea>
			          </div>
			              <input class="btn btn-default" type="submit" value="Envoyer" onclick="if (window.confirm('Voulez-vous vraiment envoyer ce formulaire ?')) 
			                {location.href='contact.php';return true;} else {return false;}" /> <!-- onclick = fenêtre de confirmation-->
			        </form>

			<div class="col-md-6">
				<div id="map" />
			</div>
		</div>
	</section>

	
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

<?php 
    unset($_SESSION['confirmation']); // unset en bas de page
    unset($_SESSION['erreur']);
    unset($_SESSION['non_valide']);
?>
	</body>
</html>
