<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 17/11/17
 * Time: 21:08
 */

namespace Modules\PatternStrategy\Interfaces;


use Modules\PatternStrategy\Entities\Duck;

interface IFactoryDuck
{
    public function createDuck(Duck $duck, $path_class);
}