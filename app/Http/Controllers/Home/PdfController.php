<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use SnappyImage;
class PdfController extends Controller
{
    public function index()
    {
//        $html = '<html><head><meta charset="utf-8"></head><h1>订单id</h1><h2>12346546</h2></html>';
//        $pdf = PDF::loadHTML($html);
//           return $pdf->inline();
  /*   $arr = ['1','2','3'];*/

//        $collects = collect($arr)->map(function ($value){
//            return $value+1;
//        });

        //dd($collects);
       /* $collects = collect($arr)->each(function ($value){
                 if ($value > 5) {
                     return false;
                 }
        });
        dd($collects);*/
       $count = User::max('id');

      echo  $str=str_pad(($count+1),8,'WXHB0000',STR_PAD_LEFT );

    }
}
