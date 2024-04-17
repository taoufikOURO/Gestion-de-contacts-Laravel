<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;


class ContactController extends Controller
{
    public function index(){
        return view('contact.index',[
            'contacts' => Contact::all(),
        ]);
    }

    public function add(){
        return view('contact.add');
    }

    public function store(Request $request){
        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
           'tel' => $request->input('tel'),
        ]);
        return redirect()->route('index');
    }

    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('index');
    }
    public function preUpdate(){
        return view('contact.update');
    }

    public function update(Request $request){
        $id = $request->input('id');
        $contact = Contact::find($id);

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel');

        $contact->save();

        return redirect()->route('index');
    }
}
