<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function games(Console $console){
        return view('console.games', compact('console'));
    }
}
