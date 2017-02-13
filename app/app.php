<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Queen.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
    return $app['twig']->render('queen.html.twig');
    });

    $app->post("/move-input", function() use ($app) {
        $newAttack = new Queen();
        return $app['twig']->render('move-input.html.twig', array('output' => $newAttack->canQueenAttack($_POST['queen-x-pos'], $_POST['queen-y-pos'], $_POST['opponent-x-pos'], $_POST['opponent-y-pos'])));
    });

    return $app;
 ?>
