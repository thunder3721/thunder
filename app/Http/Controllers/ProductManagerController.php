<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Ticket;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$tickets = Product::paginate(30);
		return view('index', compact('tickets'));
	}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
		$ticket = Ticket::whereSlug($slug)->firstOrFail();
		return view('product_detail', compact('ticket'));
	}

}