<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 17/11/17
 * Time: 21:09
 */

namespace Modules\PatternStrategy\Factories;
use Modules\PatternStrategy\Interfaces\IFactoryDuck;

class FactoryDuck implements IFactoryDuck
{

    public function createDuck(\Modules\PatternStrategy\Entities\Duck $duck, $path_class)
    {
        $class =  $path_class . $duck->duck_type;
        return $class::find($duck->id);
    }
}