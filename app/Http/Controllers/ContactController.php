<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
          $contact=Contact::all();
         // $contact=Contact::where('id', '>', 4)->get();
          //return $contact;
        return view('forms.contact_list', compact('contact'));
    }
    public function create(){
        return view('forms.contact');
    }
    public function store(Request $request){
        $input=$request->all();
        try{
            $data=Contact::create($input);
            return redirect('contact/create')->with('success', "Contact Save");
        }
       catch (\Exception $e){
           return redirect('contact/create')->with('error', "Somting went worng");
       }

    }
    public function edit($id){
        $data=Contact::findOrFail($id);
        return view('forms.edit', compact('data'));
    }
    public function update(Request $request, $id){
        $input=$request->all();
        $data=Contact::findOrFail($id);
        try{
            $data->update($input);
            $error=0;

        }
        catch (\Exception $e){
            $error=1;

        }
        if($error==0)
            return redirect('contact')->with('success', "Contact update");
        else
            return redirect()->back()->withInput()->with('error', 'someting went worng');
        return $data;
    }
    public function delete($id){
        $data=Contact::findOrFail($id);
        $data->delete;
        return redirect('contact')->with('success', "Contact delete");
    }
}
