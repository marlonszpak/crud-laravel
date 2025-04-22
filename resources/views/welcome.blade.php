<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos e Cursos</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
        }

        h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            background-color: #007bff;
            text-align: center;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .tables-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
        }

        .tabela-box {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        .cabecalho {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .cabecalho h2 {
            margin: 0;
            font-size: 22px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #444;
        }

        tr:hover {
            background-color: #eef6ff;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #000;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #b52a37;
        }

        .btn-add {
            background-color: #007bff;
            color: white;
            font-size: 14px;
            padding: 8px 14px;
        }

        .btn-add:hover {
            background-color: #0056b3;
        }

        form {
            display: inline;
        }

        p {
            margin-top: 10px;
            color: #777;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .tables-container {
                flex-direction: column;
                align-items: center;
            }

            .tabela-box {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<h1>Gerenciar Alunos e Cursos</h1>

<div class="tables-container">

    <div class="tabela-box">
        <div class="cabecalho">
            <h2>Alunos</h2>
            <a href="{{ route('alunos.create') }}" class="btn btn-add">+ Novo Aluno</a>
        </div>
        @if(count($alunos) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Curso</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->id }}</td>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->idade }}</td>
                            <td>{{ $aluno->curso->nome }}</td>
                            <td class="actions">
                                <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-edit">Editar</a>
                                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir este aluno?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum aluno cadastrado.</p>
        @endif
    </div>

    <div class="tabela-box">
        <div class="cabecalho">
            <h2>Cursos</h2>
            <a href="{{ route('cursos.create') }}" class="btn btn-add">+ Novo Curso</a>
        </div>
        @if(count($cursos) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Duração</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cursos as $curso)
                        <tr>
                            <td>{{ $curso->id }}</td>
                            <td>{{ $curso->nome }}</td>
                            <td>{{ $curso->duracao }} meses</td>
                            <td class="actions">
                                <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-edit">Editar</a>
                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" onclick="return confirm('Ao excluir um curso todos os alunos ligados a ele também serão excluidos! Tem certeza que deseja excluir este curso?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum curso cadastrado.</p>
        @endif
    </div>

</div>

</body>
</html>
