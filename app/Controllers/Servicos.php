<?php

namespace App\Controllers;

class Servicos extends BaseController
{
    public function index()
    {
        return template('servicos');
    }
}