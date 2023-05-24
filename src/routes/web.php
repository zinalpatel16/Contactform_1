<?php

Route::group(['namespace' => 'Hcipl\Contactform\Http\controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    }
);

?>