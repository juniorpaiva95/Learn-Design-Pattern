<?php

Route::group(['middleware' => 'web', 'prefix' => 'patternstrategy', 'namespace' => 'Modules\PatternStrategy\Http\Controllers'], function()
{
    Route::get('/', 'PatternStrategyController@index');
});
