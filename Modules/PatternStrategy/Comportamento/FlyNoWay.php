<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/17
 * Time: 19:01
 */

namespace Modules\PatternStrategy\Comportamento;


use Modules\PatternStrategy\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{

    public function fly(): string
    {
        return "I can't fly";
    }
}