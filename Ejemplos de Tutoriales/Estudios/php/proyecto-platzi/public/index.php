<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 10/01/16
 * Time: 03:18 PM
 */

use platziPHP\Http\Controllers\HomeController;
use \Illuminate\Http\Request;
require_once __DIR__.'/../vendor/autoload.php';


$request = Request::capture();

$controller= new HomeController(new \platziPHP\FakeDataBase());

$controller->index($request);

