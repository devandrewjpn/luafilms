<?php

namespace App\Controllers;

class Sobre extends BaseController
{
    public function index()
    {
        return template('sobre');
    }
}