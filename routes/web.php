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
        echo "O pato " . $ducksFormatted[$k]->nome . ' pode voar ? R - ' . $ducksFormatted[$k]->performFly();
        echo "<br>";
    }
    dd($ducksFormatted);
//   $factoryDuck->createDuck($du)
});