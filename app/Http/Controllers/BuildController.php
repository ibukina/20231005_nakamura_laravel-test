<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function building()
    {
        return view('building');
    }
    public function room($item=デフォルト)
    {
        $number=[
            'param'=>$item
        ];
        return view('room', $number);
    }
}
