<?php

namespace App\Http\Controllers;

use App\Models\Posao;
use Illuminate\Http\Request;

class PosaoController extends Controller
{
    public function index()
    {
        return view('poslovi.index', ["poslovi" => Posao::latest()->get()]);
    }
}
