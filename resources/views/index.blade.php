<!DOCTYPE html>
<html>

<head>
    <title>Todos os meus Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        .fixed-bottom-center {
            position: fixed;
            bottom: 20px;
            left: 60px;
            transform: translateX(-50%);
        }

        .fixed-bottom-center a.btn {
            height: 40px;
            /* altura do botão */
            line-height: 40px;
            /* centraliza texto verticalmente */
            padding: 0 20px;
        }
    </style>
</head>

<body>
    <h1 class="text-center text-primary mb-4 mt-4  border-subtle">Todos os Alunos</h1>



    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
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
        </tbody>
    </table>

    <div class="fixed-bottom-center">
        <a href="" class="btn btn-primary">Voltar</a>
    </div>

</body>

</html>