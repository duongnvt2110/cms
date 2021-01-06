<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Demo\CustomField\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['middleware'=>'jwt.guard','prefix'=>'field_item'], function () {
        Route::get('/','CustomFieldController@index')->name('custom.field.index');
        Route::POST('/store','CustomFieldController@store')->name('custom.field.store');
    });

    Route::group(['middleware'=>'jwt.guard','prefix'=>'group_field'], function () {
        Route::get('/','GroupFieldController@index')->name('group.field.index');
        Route::get('/create','GroupFieldController@create')->name('group.field.create');
        Route::post('/store','GroupFieldController@store')->name('group.field.store');
        Route::get('/edit','GroupFieldController@edit')->name('group.field.edit');
        Route::post('/delete','GroupFieldController@store')->name('group.field.delete');
        Route::post('/getField','GroupFieldController@getField')->name('group.field.getField');
    });
});
