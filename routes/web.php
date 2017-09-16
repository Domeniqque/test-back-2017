<?php

Route::get('/', 'HomeController@index')->name('index');

Route::post('/leads', 'LeadController@store')->name('leads.store');
Route::get('/leads/success', 'LeadController@success')->name('leads.success');

Route::get('/doctors/{doctor}', 'DoctorController@show')->name('doctors.show');
