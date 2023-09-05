<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ServicesController extends Controller
{
    public function index()
    {

        return view('services');
    }
}
