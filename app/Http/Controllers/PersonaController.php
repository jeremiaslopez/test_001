<?php
/*
|--------------------------------------------------------------------------
| PersonaController
|--------------------------------------------------------------------------
|
| Controlador para el modelo Persona que realiza las peticiones necesarias 
| definidas, es decir, CRUD
| No se agrega middleware debido a que aún no se inicia sesión que seria para. 
| autenticación
|
*/
namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Persona;
use Session;
use Redirect;

class PersonaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*  public function __construct()
    {
        $this->middleware('auth');
    }
     */
    /**
    *@return Response
    */
    public function index(Request $request){
        $personas = Persona::where('aPaterno', 'LIKE',"%".$request->get("nombre")."%")->orWhere('nombre', 'LIKE',"%".$request->get("nombre")."%")->orWhere('aMaterno', 'LIKE',"%".$request->get("nombre")."%")->paginate(15);
        return view('persona.index',compact('personas'));
    }
    /**
    *@return Response
    */

    public function create(){
        return view('persona.create');
    }
    /**
    *@return Response
    */
    public function store(Request $request){
        Persona::create([
        'nombre'=>$request['nombre'],
        'aPaterno'=>$request['aPaterno'],
        'aMaterno'=>$request['aMaterno'],
        'domicilio'=>$request['domicilio'],
        'nExt'=>$request['nExt'],
        'nInt'=>$request['nInt'],
        'colonia'=>$request['colonia'],
        'ciudad'=>$request['ciudad'],
        'estado'=>$request['estado'],
        'telefono'=>$request['telefono'],
        'edad'=>$request['edad'],
        'sexo'=>$request['sexo'],
        'nacionalidad'=>$request['nacionalidad'],
        'estadoCivil'=>$request['estadoCivil'],
        ]);

        $users=\Cinema\Persona::All();
        return redirect('/persona')->with('message','store');
    }
    /**
    *@return Response
    */

    public function edit($id){ 
        $personas=Persona::find($id);
        return view('persona.edit',compact('personas'));
    }

    /**
    *@return Response
    */
    public function update($id,Request $request){
        $persona=Persona::find($id);
        $persona->fill($request->all());
        $persona->save();
        Session::flash('message','Persona Editado Correctamente');
        return Redirect::to('/persona');
    }

    /**
    *@return Response
    */
    public function buscar(Request $request){
        $personas = Persona::aPaterno($request->get("nombre"))->orderBy("aPaterno", "DESC")->paginate();
        return view('persona.index',compact('personas'));
    }

    /**
    *@return Response
    */
    public function destroy($id){
    Persona::destroy($id);
    Session::flash('message','Persona Eliminado Correctamente');
    return Redirect::to('/persona');
    }


    /* public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where("aPaterno", "LIKE", "%$name%");
        }
    } */
}
