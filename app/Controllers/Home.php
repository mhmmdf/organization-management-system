<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to('/' . service('request')->getLocale());
    }
}
