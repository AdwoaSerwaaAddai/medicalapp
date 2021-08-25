<?php

namespace App\Http\Controllers;
use App\Models\medical;
use Illuminate\Http\Request;

class medicalController extends Controller
{
    //
    function index(){
        return medical::all();
    }
}
