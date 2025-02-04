<?php

namespace App\Http\Controllers;

use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;

class CodeController extends Controller
{
    public function generateQrCode()
    {
        return view('qrcode');
    }

    public function generateBarcode()
    {
        $dns1d = new DNS1D(); // Create an instance
        $barcode = $dns1d->getBarcodePNG('123456789', 'C128');

        return view('barcode', compact('barcode'));
    }

}
