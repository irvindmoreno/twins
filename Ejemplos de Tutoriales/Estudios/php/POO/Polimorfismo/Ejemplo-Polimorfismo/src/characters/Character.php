<?php
/**
 * Created by PhpStorm.
 * User: yesenia
 * Date: 07/01/16
 * Time: 04:03 PM
 */

namespace Platzi\Characters;


use Platzi\Weapons\Weapon;

abstract class Character
{
    protected $name;

    protected $hitPoints;

    protected $weapon;

    /**
     * Human constructor.
     * @param $name
     * @param $hitPoints
     */
    public function __construct($name, $hitPoints)
    {
        $this->name = $name;
        $this->hitPoints = $hitPoints;
    }

    public function equip(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    abstract public function salute();

    public function damage(Character $character)
    {
        $this->weapon->damage($character);
    }

    public function takeDamage($amount)
    {
        $this->hitPoints= $this->hitPoints - $amount;
    }
}