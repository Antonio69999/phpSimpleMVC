<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Journal;

class HomeController extends Controller
{
    public function index()
    {
        $journals = [
            new Journal(1, 'Journal 1', 2020),
            new Journal(2, 'Journal 2', 2021),
            new Journal(3, 'Journal 3', 2022),
        ];
        $this->render('index', ['journals' => $journals]);
    }
}
