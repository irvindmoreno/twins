<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 07/01/16
 * Time: 05:15 PM
 */

namespace Platzi\Weapons;


use Platzi\Characters\Character;

class Axe implements Weapon
{
    public function damage(Character $character)
    {
        $character->takeDamage(rand(1,10);
    }

}