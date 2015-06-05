<?php
use Demo\Author;
use Demo\AuthorQuery;
use Demo\Book;
use Demo\BookQuery;

$app->get('/authors', function() use ($app){
	$authors = AuthorQuery::create()->orderByFirstName()->find();
	$books = BookQuery::create()->find();
	echo $app->view->render('authors.html.twig', ['authors'=>$authors, 'books'=>$books]);
})->name('Authors');

$app->post('/addAuthor', function() use ($app){
	$post=$app->request->post();
	$Author = new Author;
	$Author->setFirstName($post['nom']);
	$Author->setLastName($post['prenom']);
	$Author->save();
	$app->redirect('/authors');
})->name('addAuthor');

$app->get('/editAuthor/:id', function($id) use ($app){
	$Author = AuthorQuery::create()
	  ->findPk($id);
	echo $app->view->render('editAuthor.html.twig', ['Author'=>$Author]);
})->name('editAuthor');


$app->post('/editAuthor/saveAuthor', function() use ($app){
	$post=$app->request->post();
	$Author = new Author;
	var_dump($post);
	$Author = AuthorQuery::create()
	  ->findPk($post['id']);
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