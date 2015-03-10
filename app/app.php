<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/results", function() use ($app) {
        $anagram = new Anagram;
        $use_words = $anagram->checkAnagram($_GET['user_word'], $_GET['user_bank']);
        //change this variable later
        return $app['twig']->render('results.twig', array('result' => $use_words));
    });

    return $app;
?>
