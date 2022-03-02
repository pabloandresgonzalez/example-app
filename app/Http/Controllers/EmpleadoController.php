<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
    	$empleados = Empleado::all();
    	return view('empleado.index', compact('empleados'));
    }

    public function create()
    {
    	return view('empleado.create');
    }

    private function perfomrValidationCreate(Request $request)
    {
      $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'area' => 'required|string|max:255',
        'boletin' => 'required|string|max:255',
        'descripcion' => 'required|string|max:255',
      ];

      $messages =[

        'name.required' => 'Es necesario ingresar el nombre',
        'email.required' => 'Es necesario ingresar el email',
        'area.required' => 'Es necesario ingresar el area',
        'boletin.required' => 'Es necesario selecionar si desea o recibir boletin',
        'descripcion.required' => 'Es necesario ingresar la descripcion',
      ];

    $this->validate($request, $rules, $messages);

    }

    public function store(Request $request)
    {

    	$this->perfomrValidationCreate($request);

      $user = new Empleado();
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->sexo = $request->input('sexo');
      $user->area = $request->input('area');
      $user->descripcion = $request->input('descripcion');

      if ($request->input('boletin') === 'si') {
        $user->boletin = 'si';
      } else {
        $user->boletin = 'no';
      }

      if ($request->input('rol') === '1') {
        $user->rol = 'Profesional de proyectos desarrollador';
      } elseif($request->input('rol') === '2')
        $user->rol = 'Gerente estratégico';
      {
        $user->rol = 'Auxiliar administrativo';
      } 
   
      $user->save();

      return redirect('/')->with([
                'message' => 'El usuario '.$user->name.' fue creado correctamente!'
       ]);
    }

    public function edit($id)
    {
      $user = Empleado::find($id);
      return view('empleado.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
      $user = Empleado::find($id);

      $this->perfomrValidationCreate($request);

      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->sexo = $request->input('sexo');
      $user->area = $request->input('area');
      $user->descripcion = $request->input('descripcion');

      if ($request->input('boletin') === 'si') {
        $user->boletin = 'si';
      } else {
        $user->boletin = 'no';
      }

      if ($request->input('rol') === '1') {
        $user->rol = 'Profesional de proyectos desarrollador';
      } elseif($request->input('rol') === '2')
        $user->rol = 'Gerente estratégico';
      {
        $user->rol = 'Auxiliar administrativo';
      } 

      $user->save();

      return redirect('/')->with([
                'message' => 'El usuario '.$user->name.' fue actualizado correctamente!'
       ]);
    }

    
}
