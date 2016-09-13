<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/coin.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/process', function() use ($app) {
        $coin_counter = new Coin;
        $input = $_POST['calcCoins'];
        $result = $coin_counter->calcCoins($input);

        return $app['twig']->render('results.html.twig', array('result'=>$result));
    });

    return $app;
?>
