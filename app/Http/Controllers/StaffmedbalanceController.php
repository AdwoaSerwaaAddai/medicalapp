<?php

namespace App\Http\Controllers;
use App\Models\staffmedbalance;
use Illuminate\Http\Request;

class StaffmedbalanceController extends Controller
{
    function index(){
    return staffmedbalance::all();
    }

    
}