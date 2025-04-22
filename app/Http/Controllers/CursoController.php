<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        Curso::create($request->all());
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect()->route('home');
    }
}
