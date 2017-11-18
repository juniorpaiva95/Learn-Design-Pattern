<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 17/11/17
 * Time: 21:20
 */

namespace Modules\PatternStrategy\Entities;


use Modules\PatternStrategy\Comportamento\FlyNoWay;

class RealDuck extends Duck
{
    protected $fillable = [
        'nome'
    ];

    /**
     * RealDuck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->duck_type = (new \ReflectionClass($this))->getShortName();
    }


}