<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	
    public function dashboard()
    {
    	return view('admin.dashboard');
    }
	
    public function blank()
    {
    	return view('admin.blank');
    }
	
    public function flot()
    {
    	return view('admin.flot');
    }
	
    public function forms()
    {
    	return view('admin.forms');
    }
	
    public function grid()
    {
    	return view('admin.grid');
    }
	
    public function morris()
    {
    	return view('admin.morris');
    }
	
    public function panelsWells()
    {
    	return view('admin.panels-wells');
    }
	
    public function tables()
    {
    	return view('admin.tables');
    }
	
    public function typography()
    {
    	return view('admin.typography');
    }
	
    public function notifications()
    {
    	return view('admin.notifications');
    }
	
    public function buttons()
    {
    	return view('admin.buttons');
    }
	
}
