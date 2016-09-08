<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get('/users', function ($request, $response, $args) {

	//$this->logger->success("Get Users");

	return $this->renderer->render($response, 'users.phtml', $args);
});
