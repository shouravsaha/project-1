<?php

namespace App\Http\Controllers;
// use illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //
    public function DemoAction(){
        $result = DB::table('product_sliders')
        ->join('products', 'product_sliders.product_id', '=', 'product_sliders.id')
        ->get();
        return $result;
        }


    }

