<?php

Route::get('/','Principal@index')->name('index');

Route::get('/reservar_nuevo','Reservar@reserve')->name('reservar.agregar');

Route::post('/reserva_agregada','Reservar@reservado')->name('reservar.agregado');

Auth::routes(); 

// Administrativo
    //Clientes
Route::get('/administracion/clientes','Administracion@agregar_cliente')->name('administracion.clientes');
Route::post('/administracion/cliente_agregado','Administracion@agregado_cliente')->name('administracion.clientes_a');

    //Tarifas
Route::get('/administracion/tarifas','Administracion@agregar_tarifas')->name('administracion.tarifas');
Route::post('/administracion/tarifas','Administracion@agregado_tarifa')->name('administracion.tarifas_a');

    //Moviles
Route::get('/administracion/moviles','Administracion@agregar_moviles')->name('administracion.moviles');
Route::post('/administracion/moviles','Administracion@agregado_moviles')->name('administracion.moviles_a');

    //Gastos
Route::get('/administracion/gastos','Administracion@agregar_gastos')->name('administracion.gastos');
Route::post('/administracion/gastos','Administracion@agregado_gastos')->name('administracion.gastos_a');
