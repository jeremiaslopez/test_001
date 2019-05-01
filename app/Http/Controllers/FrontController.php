<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   /**
	*@return Response
	*/
	public function index(){
	return view('index');
	}

/**
	*@return Response
	*/
	public function contacto(){
	return view('contacto');
	}

/**
	*@return Response
	*/
	public function reviews(){
	return view('reviews');
	}
	public function admin(){
	return view('admin.index');
	}

}
