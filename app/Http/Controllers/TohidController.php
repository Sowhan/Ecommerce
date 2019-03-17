<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TohidController extends Controller
{
    public function result(){
        $name = "Tohidul Islam Swapon";
        $roll = 214875;
        $names = array("Tohidul","Swapon","Sowhan");
        $students = array(
                    array("name"=>"Tohidul", "age"=>18, "job"=>"Teacher"),
                    array("name"=>"Swapon", "age"=>19, "job"=>"Farmer"),
                    array("name"=>"Sowhan", "age"=>20, "job"=>"Student")
        );
        return view('thank', compact('name','roll','names','students'));
    }
//    public function index ($name){
//        return $name;
//    }
    public function get_form(){
        return view('forms.contact');
    }
    public function post_data(Request $request){
        $data=$request->all;
        return $data;
    }
}
