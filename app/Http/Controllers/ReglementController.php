<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReglementController extends Controller
{
    public function index(){
        return view("reglement");
    }
}
