<?php

namespace App\Controllers;

class Contato extends BaseController
{
    public function index()
    {
        return template('contato');
    }
}