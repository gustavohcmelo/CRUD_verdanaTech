<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Verdanatech\Page;

$app = new Slim();

$app->config("debug", true);

$app->get("/", function() {

        $page = new Page();

        $page->setTpl("index");
});

$app->get("/clientes", function() {

        $page = new Page();

        $page->setTpl("clientes");
});

$app->get("/produtos", function() {

        $page = new Page();

        $page->setTpl("produtos");
});

$app->get("/relatorios", function() {

        $page = new Page();

        $page->setTpl("relatorios");
});

$app->run();