<!DOCTYPE html>
<html>
<head>
    <title>Todos os meus Alunos</title>
</head>
<body>
    <h1>Todos os Alunos</h1>

    {{-- <a href="{{ route('aluno.create') }}">Cadastrar</a> --}}

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>

        @foreach($alunos_c as $aluno)
            <tr>
                <td>{{ $aluno->id }}</td>
                <td>{{ $aluno->name }}</td>
                <td>{{ $aluno->age }}</td>
                <td>
                    {{-- <a href="{{ route('aluno.edit', $aluno->id) }}">Editar</a> 
                    <form action="{{ route('aluno.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
