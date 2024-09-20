<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OilController extends Controller
{
    public function search(Request $request) {
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
}
