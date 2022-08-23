<?php 
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('/teste/{name}', function (Request $request, Response $response, $args) {
    $this->logger->info("Slim App / route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/hello[/[{name}]]', function (Request $request, Response $response) {
    $name = $request->getAttribute('name') ?? 'Mundo';
    $response->getBody()->write("Ola, {$name}");

    return $response;
});