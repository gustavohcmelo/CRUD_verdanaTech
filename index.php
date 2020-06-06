<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Verdanatech\Page;
use \Verdanatech\Model\Clients;
use \Verdanatech\Model\Products;

$app = new Slim();

$app->config("debug", true);

$app->get("/", function() {

        $page = new Page();

        $page->setTpl("index");
});


//////// AREA DE CLIENTES //////////////
$app->get("/clientes", function() {

        $clients = Clients::listAll();

        $page = new Page();

        $page->setTpl("clientes", array("clients"=>$clients));
});

$app->get("/clientes/create", function() {

        $page = new Page();

        $page->setTpl("clientes-create");
});

$app->post("/clientes/create", function() {

        $client = new Clients();

        $client->save();


});

$app->get("/clientes/update/:idclient", function($idclient) {

        $page = new Page();

        $page->setTpl("clientes-update");
});





/////////// AREA DE PRODUTOS ////////////////
$app->get("/produtos", function() {

        $products = Products::listAll();

        $page = new Page();

        $page->setTpl("produtos", array("products"=>$products));
});

$app->get("/produtos/create", function() {

        $page = new Page();

        $page->setTpl("produtos-create");
});

$app->post("/produtos/create", function() {

        $page = new Page();

        $page->setTpl("produtos-create");
});

$app->get("/produtos/update/:idproduct", function($idproduct) {

        $page = new Page();

        $page->setTpl("produtos-create");
});

$app->run();