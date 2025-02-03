<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('url-qrcode');
    }

    public function store(Request $request)
    {
        dd($request->all());

    }
}
