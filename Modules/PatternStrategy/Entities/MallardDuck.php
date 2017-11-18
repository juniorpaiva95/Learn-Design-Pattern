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
    protected $fillable = [
        'nome'
    ];

    public function __construct(array $attributes = [])
    {
        $this->flyBehavior = new FlyWithWings();
        $this->duck_type = (new \ReflectionClass($this))->getShortName();
        parent::__construct($attributes);
    }


    public function display() : string {
        return "I'm a real Mallard Duck";
    }
}