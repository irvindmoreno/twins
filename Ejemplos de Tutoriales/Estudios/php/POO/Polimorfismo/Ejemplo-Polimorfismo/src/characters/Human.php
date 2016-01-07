<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 07/01/16
 * Time: 03:29 PM
 */

namespace Platzi\Characters;


class Human extends Character
{

    public function salute()
    {
        return "Hello, mi name is".$this->name;
    }


}