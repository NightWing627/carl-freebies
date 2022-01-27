<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index() {
        $phone = "2053461404";
        $result = strlen($phone) == 10 ? 'success' : 'Invalid phone number format';
        $hidden = $result != 'success' ? '' : 
                                '('.substr($phone, 0, 1).'••) •••-'.substr($phone, 6, strlen($phone) - 1);
        $a = array($phone, $result, $hidden);
        return view('test')
            ->with(compact('phone', 'result', 'hidden'));
    }
}
