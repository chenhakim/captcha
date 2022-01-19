<?php
namespace Captcha;

use Illuminate\Routing\Controller;

class CaptchaController extends Controller
{

	public function getIndex()
	{
		return app('captcha')->create();
	}
}
