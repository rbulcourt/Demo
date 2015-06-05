<?php
use Demo\Author;
use Demo\AuthorQuery;
use Demo\Publisher;
use Demo\PublisherQuery;
	$app->get('/accueil', function() use ($app){
		echo $app->view->render('accueil.html.twig');
	})->name('Accueil');

	include('authors.php');
	include('publishers.php');
	include('books.php');

	/*$app->post('/addBook', function() use ($app){
		$post=$app->request->post();
		$Book = new Book;
		$Book->setTitle($post['titre']);
		//$Book
	});*/

?>