<?php

Route::get('/', 'HomeController@index')->name('index');

Route::post('/leads', 'LeadController@store')->name('leads.store');
