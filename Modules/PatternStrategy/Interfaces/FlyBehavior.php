<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 12/11/17
 * Time: 18:42
 */

/**
    A interface que todas as classes de comportamento devem implementar.
 */
namespace Modules\PatternStrategy\Interfaces;

interface FlyBehavior
{
    public function fly() : string;
}