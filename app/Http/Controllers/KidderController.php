<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class KidderController extends Controller
{

    public function home(){
        $title="Preschool HomePage";
        return view('home',compact('title'));
 
    }

    public function error(){
        $title="Preschool 404 Error";
        return view('error',compact('title'));
}
public function about(){
    $title="Preschool About Us";
    return view('about',compact('title'));
}
public function appointment(){
    $title="Preschool Appointmebts";
    return view('appointment',compact('title'));
}
public function callto(){
    $title="Preschool Call to Action";
    return view('call',compact('title'));
}
public function classes(){
    $title="Preschool Classes";
    return view('classes',compact('title'));
}
public function contact(){
    $title="Preschool Contacts";
    return view('contact',compact('title'));
}
public function facility(){
    $title="Preschool Facilities";
    return view('facility',compact('title'));
}
public function team(){
    $title="Preschool Team";
    return view('team',compact('title'));
}
public function testimo(){
    $title="Preschool Testimonial";
    return view('testimo',compact('title'));
}
public function becomeTeacher(){
    $title="Preschool Become A Teacher";
    return view('becomeTeacher',compact('title'));
}

}