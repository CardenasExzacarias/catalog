<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view("index");
    }
}

