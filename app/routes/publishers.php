<?php
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
?>