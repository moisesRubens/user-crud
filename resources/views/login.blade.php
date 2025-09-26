@extends('base')

@section('content')
<form method="POST" action="{{ route('login_usr') }}">
    @csrf

    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" class="mb-4" height="57" width="72">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="your-email@gmail.com" required>
        <label for="email" class="form-label">Email</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="password" required>
        <label for="senha" class="form-label">Senha</label>
    </div>

    <a href="{{ route('register') }}">Cadastre-se</a>

    <button type="submit" class="btn btn-primary w-100 py-2 mt-3">Entrar</button>
</form>
@endsection
