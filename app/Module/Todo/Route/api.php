<?php

use Illuminate\Support\Facades\Route;

$field=[
    'namespace'=>'App\Module\Todo\Controller',
    'prefix'=>'todo'
];

Route::group($field,function (){
    Route::get( '/','TodoController@index');
    Route::post( '/','TodoController@create');
    Route::put( '/','TodoController@update');
    Route::delete( '/{id}','TodoController@delete');
});
