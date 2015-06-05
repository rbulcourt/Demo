<?php
use Demo\Book;
use Demo\BookQuery;
use Demo\Publisher;
use Demo\PublisherQuery;
use Demo\Author;
use Demo\AuthorQuery;

$app->get('/books', function() use ($app){
	$books = BookQuery::create()->find();
	$authors = AuthorQuery::create()->find();
	$publishers = PublisherQuery::create()->find();
	echo $app->view->render('books.html.twig', ['books'=>$books, 'authors'=>$authors, 'publishers'=>$publishers]);
})->name('Books');

$app->post('/addBook', function() use ($app){
	$post=$app->request->post();
	$Book = new Book;
	$Book->setTitle($post['titre']);
	$Book->setISBN($post['isbn']);
	$Book->setAuthorId($post['author']);
	$Book->setPublisherId($post['publisher']);
	$Book->save();
	$app->redirect('/books');
})->name('addBook');

$app->get('/editBook/:id', function($id) use ($app){
	$Book = BookQuery::create()->orderByTitle()->findPk($id);
	$authors = AuthorQuery::create()->find();
	$publishers = PublisherQuery::create()->find();
	echo $app->view->render('editBook.html.twig', ['Book'=>$Book,'authors'=>$authors, 'publishers'=>$publishers]);
})->name('editBook');

$app->post('/editBook/saveBook', function() use ($app){
	$post=$app->request->post();
	$Book = new Book;
	$Book = BookQuery::create()
	  ->findPk($post['id']);
	$Book->setTitle($post['titre']);
	$Book->setISBN($post['isbn']);
	$Book->setAuthorId($post['author']);
	$Book->setPublisherId($post['publisher']);
	$Book->save();
	$app->redirect('/books');
})->name('saveBook');

$app->get('/delBook/:id', function($id) use ($app){
	$Book = BookQuery::create()
	  ->filterById($id)
	  ->delete();
	$app->redirect('/books');
})->name('delBook');

?>