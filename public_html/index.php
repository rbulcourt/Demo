<?php
	require '../vendor/autoload.php';
	require_once '../generated-conf/config.php';
	$app = new \Slim\Slim(array(
    	'view' => new \Slim\Views\Twig(),
    	'templates.path'=>'../templates'
	));
	$view = $app->view();
	$view->parserOptions = array(
    '	debug' => true,	
		'cache' => false
	);
	$view->parserExtensions = array(
    	new \Slim\Views\TwigExtension(),
    	new \Twig_Extension_Debug()
	);	
	include('../app/routes/routes.php');
	$app->run();
?>

<?php 

	$authors = \Demo\AuthorQuery::create()
		->find();


	$publishers = \Demo\PublisherQuery::create()
		->find();

?>