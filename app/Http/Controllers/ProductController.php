<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$aProduct = Product::all();
//		print_r($aProduct);
//		exit;
		return view('index', compact('aProduct'));
	}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$aProduct = DB::select('select * from product where id = :id', [':id'=>$id])[0];
		return view('product_detail', compact('aProduct'));
	}

}