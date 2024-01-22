<?php

namespace App\Http\Controllers;
// use illuminate\Support\Collection;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    //----------get data in data table ----------
    // public function DemoAction(){
    //     $advancedJoin = DB::table('product_carts')
    //     ->join('products', function(JoinClause $join){
    //     $join->on('product_carts.product_id', '=', 'products.id')
    //     ->where('product_carts.color', '=', 'red');
    //     })->get();
    //     return $advancedJoin;
    // }

    // ----------using union function---------- //
    // public function unionFunction(){
    //     $query1 = DB::table('product_carts')->where('size', '=', 'x');
    //     $query2 = DB::table('product_carts')->where('product_id', '>', '4');
    //     $result = $query2->union($query1)->get();
    //     return $result;
    // }

    // ------------using advanced where clause------------ //
    // public function advanceWhereClause(){
    //     $query = DB::table('brands')
        // where clause
        // ->where('color', 'like', '%gr%')

        // ----------where not clause----------
        // ->whereNot('size', '<', 30)

        // ----------where between----------
        // ->whereBetween('product_id', [1, 20])

        // ----------orderby function----------
        // ->orderBy('color', 'asc')

        // ----------random order----------
        // ->inRandomOrder()->first();

        //----------skip and take value----------
        // ->skip(1)
        // ->take(2)
        // ->skip(1)
        // ->take(1)

        // ----------group by and having function----------
        // ->groupBy('color')
        // ->having('product_id', '=', 3)
        // ->get();

        // ----------insert function----------
        // ->insert([
        //     'brandName' => 'demo brand',
        //     'brandImg' => 'demo image'
        // ]);
        // return true;
    // }

    // ----------This is insert function---------- //
    // public function insert(Request $request){
    //     DB::table('brands')
    //     ->insert($request->input());
    //     return true;
    // }

    // ----------this is update function----------
    // public function update(request $request){
    //     DB::table('brands')
    //     ->where('id', '=', $request->id)
    //     ->update($request->input());
    //     return true;
    // }

    // ----------this is update increment or decrement function----------
    // public function update(Request $request){
    //     DB::table('products')
    //     ->where('id', $request->id)
    //     // ->increment('price', 5);
    //     ->decrement('price', 5);
    //     return true;
    // }

    // ----------this is delete function----------
    // public function delete(Request $request){
    //    $result = DB::table('products')
    //         ->where('id', $request->id)
    //         ->delete();
    //         return true;
    // }

    // chunck result

        // $data = DB::table('profiles')
        // ->orderBy('id')
        // ->chunk(5);





}
