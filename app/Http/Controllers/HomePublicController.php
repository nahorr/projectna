<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePublicController extends Controller
{
    public function index()
    {
    	return view('/welcome');
    }

     public function about()
    {
    	return view('/about');
    }

     public function productsServices()
    {
    	return view('/products-services');
    }

    public function careers()
    {
    	return view('/careers');
    }

     public function contact()
    {
    	return view('/contact');
    }
}
