<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;


class TestController extends Controller{
    function test(){
        $test = Test::data();
        return view("Test/test",["test"=>$test]);
    }
}