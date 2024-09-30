<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('includes.about');
    }

    public function contacts(){
        return view('includes.contacts');
    }

    public function services(){
        return view('user.sidebar');
        
    }

    public function index(){
        return view('user.index');
    }

    public function main(){
        return view('user.main');
    }
   

    public function oil(Request $request)
    {
       
        $serviceId = $request->input('service_id');
        
        //dd($serviceId);
      
       // $service = Service::find($serviceId);
    
        // if (!$service) {
        //     return redirect()->back()->with('error', 'Service not found.');
        // }
    
        // Process the request, pass service to a view or perform other logic
        return view('oil.home');
    }

    public function get(Request $request) {
        $validated = $request->validate([
            'manufacturer' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'fuelType' => 'required|string',
            'chasis_no' => 'required|string',
        ]);
        
        dd($validated);

        // Process the search logic or return the matching oil options
        return back()->with('success', 'Oil search was successful!');
    }

    public function history(){
        return view('user.history');
    }

    public function profile(){
        return view('user.profile');
    }
    
    public function appointments(){
        return view('user.appointments');
    }
    public function book(){
        return view('user.book');
    }
    
}