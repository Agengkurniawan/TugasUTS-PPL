<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address; 

class AddressesController extends Controller
{
    public function index()
    {
        $addresses = Address::all(); 
        return view('addresses.index', compact('addresses')); 
    }

    public function create()
    {
        $addresses = new Address();
        return view('addresses.create', compact('addresses')); 
    }

        public function store(Request $request)
    {
        $request->validate([
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        Address::create($request->all());

        return redirect()->route('addresses.index')
            ->with('success', 'Address created successfully.');
    }

    public function show(string $id)
    {
        $addresses = Address::findOrFail($id);
 
        return view('addresses.show', compact('addresses'));
    }


    public function edit(Address $address) 
    {
        return view('addresses.edit', compact('address')); 
    }

    public function update(Request $request, Address $address) 
    {
        $request->validate([
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
        ]);

        $address->update($request->all()); 

        return redirect()->route('addresses.index')
            ->with('success', 'Address updated successfully'); 
    }

    public function destroy(Address $address) 
    {
        $address->delete(); 

        return redirect()->route('addresses.index')
            ->with('success', 'Address deleted successfully'); 
    }
}
