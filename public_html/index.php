

<?php
	require '../vendor/autoload.php';
	require_once '../generated-conf/config.php';
	$app = new \Slim\Slim();
	include('../app/routes/routes.php');
	$app->run();
?>

<?php 

$authors = \Demo\AuthorQuery::create()
	->find();


$publishers = \Demo\PublisherQuery::create()
	->find();

?>

<!doctype html>
<html lang="fr">
	<head>
	 	<meta charset="utf-8">
	 	<title>Route</title>	
	</head>
	<body>

		<div id="addAuthor" style="border-style: solid;">
			<label>Ajouter un auteur</label>
			<form action="addAuthor" method="post">
			    <div>
			        <label for="nom">Nom :</label>
			        <input type="text" id="nom" name="nom" />
			    </div> 
			    <div>
			        <label for="prenom">Prenom :</label>
			        <input type="text" id="prenom" name="prenom" />
			    </div>  
			    <div class="button">
			        <button type="submit">Ajouter</button>
			    </div>
			</form>
		</div>	

		<br>

		<div id="delAuteur" style="border-style: solid;">
			<label>Supprimer un auteur</label>
			<form action="delAuthor" method="post">
			    <div>
			        <label for="nom">Nom :</label>
			        <input type="text" id="nom" name="nom" />
			    </div> 
			    <div>
			        <label for="prenom">Prenom :</label>
			        <input type="text" id="prenom" name="prenom" />
			    </div>  
			    <div class="button">
			        <button type="submit">Supprimer</button>
			    </div>
			</form>
		</div>

		<br>

		<div id="addPublisher" style="border-style: solid;">
			<label>Ajouter un éditeur</label>
			<form action="addPublisher" method="post">
			    <div>
			        <label for="nom">Nom :</label>
			        <input type="text" id="nom" name="nom" />
			    </div> 
			    <div class="button">
			        <button type="submit">Ajouter</button>
			    </div>
			</form>
		</div>	

		<br>

		<div id="addBook" style="border-style: solid;">
			<label>Ajouter un livre</label>
			<form action="addBook" method="post">
			    <div>
			        <label for="titre">Titre :</label>
			        <input type="text" id="titre" name="titre" />
			    </div> 
			    <div>
			        <select name="author">
						<?php
						foreach($authors as $author) {
							echo "<option value=".$author->getId()."----".$author->getLastName().">$author</option>";
						}
						?>
					</select>
					</select>
					<select name="publisher">
						<?php
							foreach($publishers as $publisher) {
							echo "<option value=".$publisher->getId()."----".$publisher->getName().">$publisher</option>";
						}
						?>
					</select>
			    </div>  
			    <div class="button">
			        <button type="submit">Ajouter</button>
			    </div>
			</form>
		</div>

	</body>
</html>