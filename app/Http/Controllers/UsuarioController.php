<?php
/*
|--------------------------------------------------------------------------
| UsuarioController
|--------------------------------------------------------------------------
|
| Controlador para el modelo Usuario que realiza las peticiones necesarias 
| definidas.
| No se agrega middleware debido a que aún no se inicia sesión que seria para. 
| autenticación.
|
*/
namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Session;
use Redirect;
class UsuarioController extends Controller
{
   	/**
	*@return Response
	*/
	public function index(){
		$users=User::All();
		return view('usuario.index',compact('users'));
	}
	/**
	*@return Response
	*/
	public function create(){
		return view('usuario.create');
	}
	/**
	*@return Response
	*/
	public function store(Request $request){
		\Cinema\User::create([
			'name'=>$request['name'],
			'email'=>$request['email'],
			'password'=>$request['password'],
		]);
		$users=\Cinema\User::All();
		return redirect('/usuario')->with('message','store');
	}
	/**
	*@return Response
	*/
	public function edit($id){
		$user=User::find($id);
		return view('usuario.edit',['user'=>$user]);
	}

	/**
	*@return Response
	*/
	public function update($id,Request $request){
		$user=User::find($id);
		$user->fill($request->all());
		$user->save();
		Session::flash('message','Usuario Editado Correctamente');
		return Redirect::to('/usuario');
	}

	/**
	*@return Response
	*/
	public function destroy($id){
		User::destroy($id);
		Session::flash('message','Usuario Eliminado Correctamente');
		return Redirect::to('/usuario');
	}
}
