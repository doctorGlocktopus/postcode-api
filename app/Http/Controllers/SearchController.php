<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Zip;

class SearchController extends Controller {
    public function both($pattern) {
        if(is_numeric($pattern)) {
            $stack = array();
            $zip = Zip::where('code', 'LIKE', $pattern . '%')->get();
            foreach($zip as $i)
                array_push($stack, [$i["code"], $i["name"]]);
            return $stack;
        } else {
            $stack = array();
            $zip = Zip::where('name', 'LIKE', $pattern . '%')->get();
            foreach($zip as $i)
                array_push($stack, [$i["code"], $i["name"]]);
            return $stack;
        }
    }

    public function code($pattern) {
        if(is_numeric($pattern)) {
            $stack = array();
            $zip = Zip::where('code', 'LIKE', $pattern . '%')->get();
            foreach($zip as $i)
                array_push($stack, [$i["code"], $i["name"]]);
            return $stack;
        }
    }

    public function name($pattern) {
        if(!is_numeric($pattern)) {
            $stack = array();
            $zip = Zip::where('name', 'LIKE', $pattern . '%')->get();
            foreach($zip as $i)
                array_push($stack, [$i["name"], $i["code"]]);
            return $stack;
        }
    }
}
