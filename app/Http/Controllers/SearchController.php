<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Zip;

class SearchController extends Controller {
    public function byCode($pattern) {

        $stack = array();
        $zip = Zip::where('code', 'LIKE', $pattern . '%')->get();
        foreach($zip as $i)
            array_push($stack, $i["code"], $i["name"]);
        return $stack;
    }

    public function byName($pattern) {

        $stack = array();
        $zip = Zip::where('name', 'LIKE', $pattern . '%')->get();
        foreach($zip as $i)
            array_push($stack, $i["name"], $i["code"]);
        return $stack;
    }

    public function byBoth($pattern) {
        $code = Zip::where('name', 'LIKE', $pattern . '%')->orWhere('code', 'LIKE', $pattern . '%')->get()->toArray()[0]["code"];
        $name = Zip::where('name', 'LIKE', $pattern . '%')->orWhere('code', 'LIKE', $pattern . '%')->get()->toArray()[0]["name"];
        return ($code." ".$name);
    }
}
