<?php
use Demo\Publisher;
use Demo\PublisherQuery;

$app->get('/publishers', function() use ($app){
	$publishers = PublisherQuery::create()->orderByName()->find();
	echo $app->view->render('publishers.html.twig', ['publishers'=>$publishers]);
})->name('Publishers');

$app->post('/addPublisher', function() use ($app){
	$post=$app->request->post();
	$Publisher = new Publisher;
	$Publisher->setName($post['nom']);
	$Publisher->save();
	$app->redirect('/publishers');
})->name('addPublisher');

$app->get('/editPublisher/:id', function($id) use ($app){
	$Publisher = PublisherQuery::create()
	  ->findPk($id);
	echo $app->view->render('editPublisher.html.twig', ['Publisher'=>$Publisher]);
})->name('editPublisher');

$app->post('/editPublisher/savePublisher', function() use ($app){
	$post=$app->request->post();
	$Publisher = new Publisher;
	$Publisher = PublisherQuery::create()
	  ->findPk($post['id']);
	$Publisher->setName($post['nom']);
	$Publisher->save();
	$app->redirect('/publishers');
})->name('savePublisher');

$app->get('/delPublisher/:id', function($id) use ($app){
	$Publisher = PublisherQuery::create()
	  ->filterById($id)
	  ->delete();
	$app->redirect('/publishers');
})->name('delPublisher');

?>