<?php

namespace App\Http\Controllers;
use App\Models\ekstraculicullars;

use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function utama () {
        return view('ekstraculicullar', [
            "title" => "Ekstraculicullars",
            "Ekstra" => ekstraculicullars::all()
            ]);
    }

    public function utama2 () {
        return view('dashboard.views.ekstra.ekstraculicullar', [
            "title" => "Ekstraculicullars",
            "Ekstra" => ekstraculicullars::all()
            ]);
    }

   
}
