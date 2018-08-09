<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use SnappyImage;
class PdfController extends Controller
{
    public function index()
    {
        $html = '<html><head><meta charset="utf-8"></head><h1>订单id</h1><h2>12346546</h2></html>';
        $pdf = PDF::loadHTML($html);
        return $pdf->inline();

    }
}
