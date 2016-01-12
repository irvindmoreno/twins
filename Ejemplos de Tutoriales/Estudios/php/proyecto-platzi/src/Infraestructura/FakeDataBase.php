<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 10/01/16
 * Time: 05:56 PM
 */
namespace platziPHP\Infraestructura;

use Illuminate\Support\Collection;

class FakeDataBase
{
    public function autores()
    {
        return new Collection([
            new Autor('yesvd@hotmail.com','123456'),
            new Autor('irvind@hotmail.com','123'),
            new Autor('yess@gmail.com','456'),
            new Autor('twins@hotmail.com','1414'),
            new Autor('zktitos@hotmail.com','abcd')
        ]);

    }
}