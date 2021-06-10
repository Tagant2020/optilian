<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
			<title>Optilian</title>
		</head>
		<body>
			<div class="container"></div>
				 <div class="panel panel-primary">
					<div class="panel-heading">
						<h1><center>Ze vigenère Tool</center></h1>
					</div>
					<div class="panel-body">
						<form action ="" method="post" data-url="controleur/ajoutcard.php" id="form_ajoutcard">
							<div class="form-group" id='divpageentreprise'>
								<div class="form-group">
									<label>Texte en clair:</label>
									<textarea class="form-control"  id='texte_clair' name="clair" required> </textarea></br>
									<div id='error_texte' class='alert alert-danger'>Erreur: text manquant</div>
								</div>
								<div class="form-group">
									<label>Clef:</label>
									<input type="clef" id='clef' class="form-control"  name="clef" required> </br>
									<div id='error_clef' class='alert alert-danger'>Erreur: caractère illicite</div>
								</div>
								<div class="d-grid gap-2 d-md-flex justify-content-md-end">
								  <button id="encrypter" name="clair" class="btn btn-default me-md-2" type="button">Encrypter</button>
								  <button id="decrypter" name='crypte' class="btn btn-default" type="button">Décrypter</button>
								</div>
								<input class='reseteur' type="reset" style='display:none'>
							</div>
						</form>
						<form action ="" method="post" data-url="controleur/ajoutcard.php" id="form_ajoutcard">
							<div class="form-group" id='divpageentreprise'>
								<div class="form-group">
									<label>Texte encrypté:</label>
									<textarea class="form-control"  id='texte_crypte' name="crypte" required> </textarea>
								</div>
								<button id='efface' class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-ok-sign"></span>   Effacer</button>
							</div>
							<input class='reseteur' type="reset" style='display:none'>
						</form>
					</div>
				</div> 
				</div> 
			
								
						
			
			<script src="js/jquery.js"></script>
			<script src="bootstrap/js/bootstrap.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
			<script src="js/tagant_plugin_manager.js"></script>
			<script src="js/index.js"></script>
		</body>
	</html>
