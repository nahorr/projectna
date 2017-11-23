<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Crypt;
use App\Job;


class HomePublicController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

     public function about()
    {
    	return view('about');
    }

     public function productsServices()
    {
    	return view('products-services');
    }

    public function careers()
    {
        $jobs = Job::latest()->get();

    	return view('careers', compact('jobs'));
    }

    public function jobDetails($job_id)
    {
        $job = Job::find(decrypt($job_id));

        return view('careers.jobdetails', compact('job'));
    }

    public function contact()
    {
    	return view('contact');
    }
}
