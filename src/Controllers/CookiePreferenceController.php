<?php

namespace Boufoun\CookiePreference\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CookiePreferenceController extends BaseController
{
    public function update()
    {
    	$data = request()->all();

        return View::make('vendor.cookie-preference.preference');
    }
}
