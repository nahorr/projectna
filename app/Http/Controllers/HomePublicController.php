<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Crypt;
use App\Job;
use App\JobRequirement;
use App\JobApplication;
use App\Traits\CaptchaTrait;

class HomePublicController extends Controller
{
    use CaptchaTrait;

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
        $job_requirements = JobRequirement::where('job_id', '=', $job->id)->get();

        return view('careers.jobdetails', compact('job', 'job_requirements'));
    }

    public function jobApplicationForm($job_id)
    {
        $job = Job::find(decrypt($job_id));
        $job_requirements = JobRequirement::where('job_id', '=', $job->id)->get();

        
        return view('careers.jobapplicationform', compact('job', 'job_requirements'));
    }

    public function postJobApplicationForm(Request $r)
    {
       
       $r['captcha'] = $this->captchaCheck();
      
        $this->validate($r, [
        'job_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'street' => 'required',
        'city' => 'required',
        'state' => 'required',
        'must_haves' => 'required',
        'g-recaptcha-response' => 'required',
        'captcha' => 'required|min:1',
        
        ],

        [
                'g-recaptcha-response.required' => 'Captcha is required',
                'captcha.min'           => 'Wrong captcha, please try again.'
            ]

        );
 
       JobApplication::insert([
            'job_id'=>$r->job_id,
            'first_name'=>$r->first_name,
            'last_name'=>$r->last_name,
            'phone'=>$r->phone,
            'email'=>$r->email,
            'street'=>$r->street,
            'city'=>$r->city,
            'state'=>$r->state,
            'must_haves'=>$r->must_haves,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

             
        ]);
 
       flash('Your Job Application was Submitted successfully. We will be contacting you soon!')->success();
      
       return back();  
    }

    public function contact()
    {
    	return view('contact');
    }
}
