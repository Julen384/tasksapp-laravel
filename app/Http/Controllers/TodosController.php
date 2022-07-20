<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodosController extends Controller
{
    
    /*
    * index para mostrar todos los todos
    * store para guardar un todo
    * update para actualizar un todo
    * destroy para eliminar un todo
    * edit para mostrar el formulario de edición
    */
    public function store(Request $request){

            /* PRIMERO VALIDAMOS */
        $request->validate([
            'title' => 'required|min:3'
        ]);

            /* SEGUNDO CREAMOS EL OBJETO Y ASIGNAMOS LOS VALORES Y GUARDAMOS CON "SAVE" */
        $todo = new Todo;
        $todo->title = $request -> title;
        $todo->save();

        /* REDIRIGIR AL USUARIO A LA RUTA QUE SE LLAMA "TODOS" Y LE DAMOS UNA RESPUESTA CON "WITH" */
        return redirect()->route('todos')->with('success', 'Tarea Creada Correctamente');
    }

    public function index(){
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }


    public function show($id){
        $todos = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }

    public function update(){
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }


    public function destroy(){
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }
}
