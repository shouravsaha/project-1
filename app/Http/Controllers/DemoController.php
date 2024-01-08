<?php

namespace App\Http\Controllers;
// use illuminate\Support\Collection;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //
    // public function DemoAction(){
    //     $advancedJoin = DB::table('product_carts')
    //     ->join('products', function(JoinClause $join){
    //     $join->on('product_carts.product_id', '=', 'products.id')
    //     ->where('product_carts.color', '=', 'red');
    //     })->get();
    //     return $advancedJoin;
    // }

    // Basic where cluases
    // = (equal to)
    // != (not equal)

    public function unionFunction(){
        $query1 = DB::table('product_carts')->where('size', '=', 'x');
        $query2 = DB::table('product_carts')->where('product_id', '>', '4');
        $result = $query2->union($query1)->get();
        return $result;
    }
}
