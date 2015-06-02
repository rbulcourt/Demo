<?php
use Demo\Author;
use Demo\AuthorQuery;
	$app->get('/', function(){

	});
	$app->post('/sendAuthor', function() use ($app){
		$post=$app->request->post();
		$Author = new Author;
		$Author->setFirstName($post['nom']);
		$Author->setLastName('Toto');
		$Author->save();
		$authors = AuthorQuery::create()->find();
		foreach ($authors as $aut) {
			$aut->getFirstName();
			echo "$aut";
		};
	});
?>