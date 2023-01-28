<?php

namespace App\Http\Controllers;
use App\provinsi;

use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $provinsi = provinsi::all();

    }
}
