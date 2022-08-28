<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    /**
     * create function return view with contact form
     */
    public function create(){
        return view('Contact.create');
    }

    /**
     * save function insert data to contacts table
     */
    public function save(Request $request){
        $request->validate([
            'name'  => 'required',
            'phone'  => 'required',
            'address'  => 'required',
        ]);
        $result=Contacts::insert([
            'name'      => $request->name,
            'phone'     => $request->phone,
            'address'   => $request->address,
        ]);
        if($result)
            return redirect()->to('/contact/show');
        else
            return ['message'=>'Error'];
    }

    /**
     * show function return contacts list
     */
    public function show(){
        $contacts=Contacts::all();
        return $contacts;
    }
}
