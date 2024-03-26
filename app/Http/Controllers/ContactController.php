<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if($request-> has('search')) {
            $Contact = Contact::where('first_name', 'LIKE', '%' .$request->search. '%')->paginate(5);
        } else {
            $Contact = Contact::all(); 
        }
       
        return view('Contact.index', compact('Contact')); 
    }

    public function create()
    {
        $Contact = new Contact();
        return view('Contact.create', compact('Contact')); 
    }

        public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('Contact.index')
            ->with('success', 'Contact created successfully.');
    }


    public function edit(Contact $Contact) 
    {
        return view('Contact.edit', compact('Contact')); 
    }

    public function show(string $id)
    {
        $Contact = Contact::findOrFail($id);
 
        return view('Contact.show', compact('Contact'));
    }

    public function update(Request $request, Contact $Contact) 
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $Contact->update($request->all()); 

        return redirect()->route('Contact.index')
            ->with('success', 'Address updated successfully'); 
    }

    public function destroy(Contact $Contact) 
    {
        $Contact->delete(); 

        return redirect()->route('Contact.index')
            ->with('success', 'Contact deleted successfully'); 
    }
}
