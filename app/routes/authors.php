<?php
use Demo\Author;
use Demo\AuthorQuery;

$app->get('/authors', function() use ($app){
	$Authors = AuthorQuery::create()->find();
	echo $app->view->render('authors.html.twig', ['Authors'=>$Authors]);
})->name('Authors');

/*$app->post('/addAuthor', function() use ($app){
	$post=$app->request->post();
	$Author = new Author;
	$Author->setLastName($post['nom']);
	$Author->setFirstName($post['prenom']);
	$Author->save();
	$authors = AuthorQuery::create()->find();
	foreach ($authors as $aut) {
		echo "$aut";
	};
	echo $app->view->render('author.html.twig', ['authors'=>$authors]);
})->name('addAuthor');

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
});*/
?>