<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 07/01/16
 * Time: 05:14 PM
 */

namespace Platzi\Weapons;


use Platzi\Characters\Character;

class Sword implements Weapon
{

    /**
     * @param Character $character
     */
    public function damage(Character $character)
    {
        $character->takeDamage(rand(1,8));
    }
}