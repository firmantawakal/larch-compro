<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Club;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
