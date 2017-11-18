<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Modules\PatternStrategy\Factories\FactoryDuck;

Route::get('/', function () {
    $duck = new \Modules\PatternStrategy\Entities\MallardDuck(['nome' => 'MallardDuck']);
    $duck->save();


    $realDuck = new \Modules\PatternStrategy\Entities\RealDuck(['nome' => 'RealDuck']);
    $realDuck->save();
    return 'Tudo salvo!';
});

Route::get('/teste', function () {
    $factoryDuck = new FactoryDuck();
    $ducks = \Modules\PatternStrategy\Entities\MallardDuck::all();

    $ducksFormatted = array();

    foreach ($ducks as $k => $v) {
        $ducksFormatted[] = $factoryDuck->createDuck($v, '\\Modules\\PatternStrategy\\Entities\\');
        echo "O pato <b>" . $ducksFormatted[$k]->nome . '</b> pode voar ? R - <b>' . $ducksFormatted[$k]->performFly() . '</b>';
        echo "<br>";
    }

    echo "<br>Mudando dinamicamente para que todos patos possam voar<br><br>";

    foreach ($ducksFormatted as $d){
        $d->setFlyBehavior(new \Modules\PatternStrategy\Comportamento\FlyWithWings());
        echo "O pato <b>" . $d->nome . '</b> pode voar ? R - <b>' . $d->performFly() . '</b>';
        echo "<br>";
    }

    dd($ducksFormatted);
});