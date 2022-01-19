<?php
Route::get(config('captcha.route_name'), [
	'middleware' => config('captcha.middleware'),
	'uses' => 'Captcha\Captcha\\CaptchaController@getIndex'
]);
