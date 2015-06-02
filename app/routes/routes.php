<?php
use Demo\Author;
use Demo\AuthorQuery;
use Demo\Publisher;
use Demo\PublisherQuery;
	$app->get('/', function(){

	});

	$app->post('/addAuthor', function() use ($app){
		$post=$app->request->post();
		$Author = new Author;
		$Author->setLastName($post['nom']);
		$Author->setFirstName($post['prenom']);
		$Author->save();
		$authors = AuthorQuery::create()->find();
		foreach ($authors as $aut) {
			echo "$aut";
		};
	});

	$app->post('/delAuthor', function() use ($app){
		$post=$app->request->post();
		AuthorQuery::create()
		  ->filterByLastName($post['nom'])
		  ->filterByFirstName($post['prenom'])
		  ->delete();
		$authors = AuthorQuery::create()->find();
		foreach ($authors as $aut) {
			echo "$aut";
		};
	});

	$app->post('/addPublisher', function() use ($app){
		$post=$app->request->post();
		$Publisher = new Publisher;
		$Publisher->setName($post['nom']);
		$Publisher->save();
		$publishers = AuthorQuery::create()->find();
		foreach ($publishers as $publi) {
			echo "$publi";
		};
	});

	$app->post('/addBook', function() use ($app){
		$post=$app->request->post();
		$Book = new Book;
		
	});

?>