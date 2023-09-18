<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        die("index");
        return Inertia::render('Pages/Home');
    }
}
