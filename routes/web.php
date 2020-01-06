<?php

Route::get('/','Principal@index')->name('index');

Route::get('/reservar_nuevo','Reservar@reserve')->name('reservar.agregar');

Route::get('/agregar_cliente','Agregar@agregar_cliente')->name('agregar.cliente');

Auth::routes();