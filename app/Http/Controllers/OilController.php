<?php

namespace App\Http\Controllers;

use App\Models\Oil;
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

    public function destroy($id)
    {
        $oil = Oil::findOrFail($id); 
        $oil->delete(); 
    
        return redirect()->route('admin.manage')->with('success', 'Oil record deleted successfully!');
    }
    
    public function edit($id)
    {
        $oil = Oil::findOrFail($id); 
    
        return view('admin.edit_oil', compact('oil')); 
    }
    

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'oil_name' => 'required|string',
            'car_type' => 'required|string',
            'car_model' => 'required|string',
            'manufacturing_year' => 'required|integer',
            'engine_type' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|boolean',
        ]);
    
        $oil = Oil::findOrFail($id);
        $oil->update($validated);
    
        return redirect()->route('admin.manage')->with('success', 'Oil record updated successfully!');
    }
 
}
