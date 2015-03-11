<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RPS.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {

        return $app['twig']->render('form.twig');
    });

    $app->post("/winner", function() use ($app) {

        $winner = new RPS;

        $second = $_POST['player2'];

        if (!isset($second)) {
            $second = $winner->rpsSinglePlayer();
        } 

        $win = $winner->rpsResult($_POST['player1'], $second);

        return $app['twig']->render('winner.twig', array('winner' => $win));

    });

    return $app;
?>
