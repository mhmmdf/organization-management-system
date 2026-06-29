<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function redirectToLocale()
    {
        $supportedLocales = config('App')->supportedLocales;
        $locale = $this->request->getLocale();

        if (! in_array($locale, $supportedLocales)) {
            $locale = $supportedLocales[0];
        }

        return redirect()->to("/{$locale}");
    }
}
