<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;


class CursoController extends Controller
{
  
    public function index()
    {
        $cursos = Curso::OrderBy('id','desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    

    public function create()
    {
        return view('cursos.create');
    }

    


    public function store(StoreCurso $request)
    {
   
        $curso = new Curso();

        $curso->name=$request->name;
        $curso->category=$request->category;
        $curso->description=$request->description;
        $curso->teacher=$request->teacher;

        //return $curso;

        $curso->save();

        return redirect()->route('cursos.show', $curso);

    }

    


    public function show($id)

    {
        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    



    public function edit($id)
    {
        $curso = Curso::find($id);

        
        return view('cursos.edit', compact('curso'));
    }






    public function update(Request $request, $id)
    {
           $curso = Curso::find($id);
           $curso->name=$request->name;
           $curso->category=$request->category;
           $curso->description=$request->description;
           $curso->teacher=$request->teacher;
           
           $curso->update();

           return redirect()->route('cursos.show', compact('curso'));

    }

    


    public function destroy($cursos)
    {
        
        return view('cursos.destroy', compact('cursos'));
    }
}
