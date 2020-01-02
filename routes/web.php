<?php

Route::get('/','Principal@index')->name('index');

Route::get('/reservar_nuevo','Reservar@reserve')->name('reservar.agregar');

Auth::routes();