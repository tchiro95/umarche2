<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //

    public function showComponent1()
    {
        $message = 'メッセージ';
        return view('tests.component-test1', compact("message"));
        //compactは連想配列を作る。keyが変数名と同じになるので、compact('keyName')となって、$keyNameとはならないことに注意
    }
    public function showComponent2()
    {
        return view('tests.component-test2');
    }
}
