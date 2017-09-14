<?php

Route::get('/', 'HomeController@index');

Route::post('/leads', 'LeadController@store');
