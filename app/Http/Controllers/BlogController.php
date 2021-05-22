<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('page.home0042');
	}
 
	public function artikel(){
		return view('page.article0042');
	}
 
	public function kontak(){
		return view('page.contact0042');
	}
}
