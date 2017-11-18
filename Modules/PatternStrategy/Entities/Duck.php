<?php

namespace Modules\PatternStrategy\Entities;


use Illuminate\Database\Eloquent\Model;
use Modules\PatternStrategy\Interfaces\FlyBehavior;

abstract class Duck extends Model
{
    protected $table = "ducks";
    public $flyBehavior;
    public $quackBehavior;

    public function performFly() {
        return $this->flyBehavior->fly();
    }

    /**
     * @param mixed $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function performQuack() {

    }

    public function swim() {
        return "All ducks float, even decoys!";
    }
}
