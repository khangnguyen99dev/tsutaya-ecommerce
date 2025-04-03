<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;

class LocalizationController extends Controller
{
    public function setLocale($locale)
    {
        if (!in_array($locale, config('app.locales'))) {
            $locale = config('app.fallback_locale');
        }
        $cookie = cookie('locale', $locale, 60 * 24 * 30);
    
        return redirect()->back()->withCookie($cookie);
    }
}