<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/17
 * Time: 18:45
 */

namespace Modules\PatternStrategy\Entities;


use Modules\PatternStrategy\Comportamento\FlyWithWings;

class MallardDuck extends Duck
{

    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->duck_type = (new \ReflectionClass($this))->getShortName();
    }

    public function display() : string {
        return "I'm a real Mallard Duck";
    }
}