<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function show1() {
        $message = 'メッセージ';
        return view('tests.component-test1',compact('message'));
    }
    public function show2() {
        return view('tests.component-test2');
    }
}
