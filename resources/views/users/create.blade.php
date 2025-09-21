<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar Usuário</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul style="color: red">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/users" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Criar Usuário</button>
    </form>
</body>
</html>
