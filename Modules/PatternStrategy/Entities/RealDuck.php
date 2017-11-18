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
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->flyBehavior = new FlyNoWay();
        $this->duck_type = (new \ReflectionClass($this))->getShortName();
        parent::__construct($attributes);
    }


}