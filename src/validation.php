<?php
Validator::extend(config('captcha.validator_name'), function ($attribute, $value, $parameters) {
	return Captcha::check($value);
});
Validator::replacer(config('captcha.validator_name'), function ($message, $attribute, $rule, $parameters) {
	if ($message === 'validation.captcha') {
		$message = 'Image verification code is incorrect.';
	}
	return $message;
});