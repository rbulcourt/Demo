<?php
use Demo\Author;
use Demo\AuthorQuery;

$app->get('/authors', function() use ($app){
	$Authors = AuthorQuery::create()->find();
	echo $app->view->render('authors.html.twig', ['Authors'=>$Authors]);
})->name('Authors');

$app->post('/addAuthor', function() use ($app){
	$post=$app->request->post();
	$Author = new Author;
	$Author->setFirstName($post['nom']);
	$Author->setLastName($post['prenom']);
	$Author->save();
	$authors = AuthorQuery::create()->find();
	echo $app->view->render('authors.html.twig', ['authors'=>$authors]);
	$app->redirect('/authors');
})->name('addAuthor');

$app->get('/editAuthor/:id', function($id) use ($app){
	$Author = AuthorQuery::create()
	  ->filterById($id);
	echo $app->view->render('editAuthor.html.twig', ['id'=>$id]);
})->name('editAuthor');


$app->post('/editAuthor/saveAuthor', function() use ($app){
	$post=$app->request->post();
	$Author = new Author;
	$Author = AuthorQuery::create()
	  ->filterById($post['id']);
	$Author->setFirstName($post['nom']);
	$Author->setLastName($post['prenom']);
	$Author->save();
	$app->redirect('/authors');
})->name('saveAuthor');

$app->get('/delAuthor/:id', function($id) use ($app){
	$Author = AuthorQuery::create()
	  ->filterById($id)
	  ->delete();
	$app->redirect('/authors');
})->name('delAuthor');
?>