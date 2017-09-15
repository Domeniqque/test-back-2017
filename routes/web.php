<?php

Route::get('/', 'HomeController@index')->name('index');

Route::post('/leads', 'LeadController@store')->name('leads.store');

Route::get('/doctors/{doctor}', 'DoctorController@show')->name('doctors.show');

Route::get('/mailable', function () {
    return new App\Mail\AppointmentMarked((object) [
        "name" => "Domeniqque Dylluar",
        "email" => "domeniqque@hotmail.com",
        "phone" => "89 9099-8798",
        "inDay" => date("Y-m-d H:m")
    ]);
});
