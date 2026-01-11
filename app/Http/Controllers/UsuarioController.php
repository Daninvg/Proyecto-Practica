<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use function Laravel\Prompts\warning;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        return view('usuario.usuario-mensaje');
        dd();
=======
        $usuario = Usuario::all();
        return view('usuario.usuario-mensaje', compact('usuario'));
>>>>>>> usuariosMigracion
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.usuario-registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required |max:20',
            'apellido' => 'required |string',
            'email' => 'required |string'
        ]);

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->save();
      
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuario.usuario-mostrar-usuario', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.usuario-editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $message = "Error, name or email must be different";
        $request->validate([
            'nombre' => 'required |max:20',
            'apellido' => 'required |string',
            'email' => 'required |string'
        ]);

        if ($request->nombre === $usuario->nombre)
            return redirect()->route('usuario.index')->with('error',$message);
        else{ 
            $usuario->nombre = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->email = $request->email;
            $usuario->save();
        }
        return redirect()->route('usuario.show', $usuario->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete($usuario->id);
        return redirect()->route('usuario.index');
    }

}
