<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/29/2019
 * Time: 8:01 AM
 */

Route::group(['namespace' => 'Zalluq\Contactus\Http\Controllers'], function () {
    Route::get('contact-us', 'ContactusController@index')->name('contact');
    Route::post('contact-us', 'ContactusController@send');
});
