<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 11/01/16
 * Time: 06:58 PM
 */

namespace platziPHP\Domain;


use platziPHP\Infraestructura\FakeDataBase;

class Imprint
{
    private $db;

    /**
     * @type FakeDataBase
     */
    public function __construct(FakeDataBase $db)
    {
        $this->db = $db;
    }


    /**
     * @return\Illuminate\Support\Collection
     */
    public function listaAutores()
    {
        $this->db->autores();
    }
}