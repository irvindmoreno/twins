<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 10/01/16
 * Time: 03:28 PM
 */
namespace platziPHP\Http\Controllers;

use Illuminate\Http\Request;
use platziPHP\Autor;
use platziPHP\FakeDataBase;
use platziPHP\Http\Views\View;

class HomeController

{
    private $db;

    public function __construct(FakeDataBase $db)
    {
        $this->db= $db;
    }

    public function index (Request $request)
    {
        //var_dump($request);

        $autores= $this->db->autores();
        $first=$autores->first();



        $view = new View('home',['autores' => $autores,
                                  'firstAutor'=>$first]);

        $response = $view->render();
        $response->send();

    }

}