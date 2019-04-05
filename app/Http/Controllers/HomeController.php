<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index(){
        $name = "Tohidul Islam";
        $roll = 214875;
        $cars = array('Toyota', "Brm", "Vibo");
        $students = array(
            array("name"=>"Tohidul", "age"=>19, "job"=>"student"),
            array("name"=>"Swapon", "age"=>20, "job"=>"techar"),
            array("name"=>"Sowhan", "age"=>12, "job"=>"sporter"),
        );

        return view('home', compact('name','roll','cars','students'));
    }
    public function get_data($roll)
    {
        return $roll;
    }
    public function get_form(){
        return view('forms.contact');
    }
    public function post_data(Request $request){
        $data=Input::get('name');
        //$data = $request->all();
        return $data;
    }
}
