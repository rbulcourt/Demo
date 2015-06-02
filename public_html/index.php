<!doctype html>
<html lang="fr">
	<head>
	 	<meta charset="utf-8">
	 	<title>Route</title>	
	</head>
	<body>
		<form action="sendAuthor" method="post">
		    <div>
		        <label for="nom">Nom :</label>
		        <input type="text" id="nom" name="nom" />
		    </div>   
		    <div class="button">
		        <button type="submit">Envoyer votre message</button>
		    </div>
		</form>
	</body>
</html>

<?php
	require '../vendor/autoload.php';
	require_once '../generated-conf/config.php';
	$app = new \Slim\Slim();
	include('../app/routes/routes.php');
	$app->run();
?>