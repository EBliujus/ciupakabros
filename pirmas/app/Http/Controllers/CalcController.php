<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function show(Request $request)
    {
        $rez = $request->session()->get('rez');

        return view('calc.form', ['rez' => $rez]);
    }
    public function doCalc(Request $request)
    {
        $rez = $request->x + $request->y;

        $request->session()->put('rez', $rez);

        return redirect()->back();
    }
}
