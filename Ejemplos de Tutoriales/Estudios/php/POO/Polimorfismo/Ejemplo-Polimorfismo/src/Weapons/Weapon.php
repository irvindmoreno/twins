<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 07/01/16
 * Time: 05:17 PM
 */

namespace Platzi\Weapons;


use Platzi\Characters\Character;

interface Weapon
{
    public function damage(Character $character);

}