<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        return template('portfolio');
    }
}