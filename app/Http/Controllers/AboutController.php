<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$a ='<i><h2><font color=magenta>Ini halaman About</font></h2></i>';
    	$b ='<b><h5>15 Januari 2018</h5></b>';

    	return view('escape',compact('a','b'));
    }
    public function template()
    {
    	return view('test');
    }
    public function template2()
    {
    	return view('test2');
    }
     public function template3()
    {
    	return view('test3');
    }
     public function template4()
    {
    	return view('test4');
    }
     public function template5()
    {
    	return view('test5');
    }
}