<?php

Route::get('/', 'HomeController@index')->name('index');

Route::post('/leads', 'LeadController@store')->name('leads.store');

Route::get('/doctors/{doctor}', 'DoctorController@show')->name('doctors.show');
