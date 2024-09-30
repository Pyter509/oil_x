<?php

namespace App\Http\Controllers;

use App\Models\Oil;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view ('admin.home');
    }

    public function manage(){
        $oil=Oil::all();
       
        return view('admin.manage',compact('oil'));
    }

    public function add(Request $request)
    {

        // dd('hello there');
        $validated = $request->validate([
            'oil' => 'required|string',
            'car_type' => 'required|string',
            'car_model' => 'required|string',
            'manufacturer_year' => 'required|integer', // Matches 'manufacturing_year' column
            'engine_type' => 'required|string',
            'price' => 'required|numeric', // Ensure price is numeric
            'status' => 'required|boolean', // Validate as boolean
        ]);
        // dd($validated);
    
        // Insert the validated data into the oil table
        Oil::create([
            'oil_name' => $validated['oil'], // Correct field name
            'car_type' => $validated['car_type'],
            'car_model' => $validated['car_model'],
            'manufacturing_year' => $validated['manufacturer_year'], // Correct field name
            'engine_type' => $validated['engine_type'],
            'price' => $validated['price'], // Ensure this is numeric as required
            'status' => $validated['status'], // Boolean, correct as per migration
        ]);
    
      
        return redirect()->route('admin.manage')->with('success', 'Entry added successfully!');
    }


    public function customers(){
        $customer=User::all();
       
        return view('admin/customers',compact('customer'));
    }

    public function appointments(){
        return view('admin/appointments');
    }

    public function payee(){
        return view('admin/payments');
    }
    
}
