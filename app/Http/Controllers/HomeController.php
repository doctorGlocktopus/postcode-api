<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip;

class HomeController extends Controller
{
    public function index() {
        $zip = Zip::all();
        return view('welcome', compact('zip'));
    }
}
