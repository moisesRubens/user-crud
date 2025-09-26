@extends('base')

@section('content')

<main class="d-flex flex-column align-items-center justify-content-center" style="height: 70vh;">
    <div style="width: 100%; max-width: 400px; margin-left: 2rem"> {{-- Limita a largura máxima do formulário --}}
        <form class="row g-3" action="{{ route('store') }}" method="POST">
            @csrf

            <div class="col-12">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="col-12">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00">
            </div>

            <div class="col-12">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Registrar-se</button>
            </div>
        </form>
    </div>
</main>

@endsection
