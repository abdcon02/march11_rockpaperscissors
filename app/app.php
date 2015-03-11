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

        if (!isset($_POST['player2'])) {
            $player2 = $_POST['player2'] = $winner->rpsSinglePlayer();
        }

        $win = $winner->rpsResult($_POST['player1'], $player2);

        return $app['twig']->render('winner.twig',
        array('winner' => $win, 'player1' => $_POST['player1'], 'player2' => $player2));

    });

    return $app;
?>
