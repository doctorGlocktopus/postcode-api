<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip;

class HomeController extends Controller
{
    public function index() {
        $search = "plz||name";
        $test = Zip::all();
        return view('welcome', compact('test', 'search'));

        // $search = "plz||name";
        // $test = array();
        // return view('welcome');
    }
}
