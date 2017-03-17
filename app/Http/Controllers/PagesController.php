<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
	public function about()
	{
		return view('about');
	}
	public function about2()
	{
		return view('about2');
	}
	public function contact()
	{
		return view('contact');
	}	
	
}
