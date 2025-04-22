<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('curso')->get();
        $cursos = Curso::all();
        return view('welcome', compact('alunos', 'cursos'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('alunos.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $cursos = Curso::all();
        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect()->route('home');
    }
}
