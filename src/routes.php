<?php
Route::get(config('captcha.route_name'), [
	'middleware' => config('captcha.middleware'),
	'uses' => 'Captcha\controllers\CaptchaController@getIndex'
]);
