<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaintenceController extends Controller
{

    public function index()
    {
        return view('maintence.index');
    }
}
