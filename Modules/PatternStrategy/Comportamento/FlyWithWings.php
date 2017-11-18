<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/17
 * Time: 18:51
 */

namespace Modules\PatternStrategy\Comportamento;

use Modules\PatternStrategy\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{

    public function fly(): string
    {
        return "I'm flyiiiing!!";
    }
}