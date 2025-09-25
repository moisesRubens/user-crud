<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body class="d-flex align-items-center justify-content-center bg-body-tertiary" style="height: 100vh;">
    <main class="m-auto meu-form-container">
        <form>
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" class="mb-4" height="57" width="72">
            <h1 class="h3 mb-3 fw-normal">Entrar</h1>

            <div class="form-floating">
                
                <input type="email" class="form-control" id="email" name="email" placeholder="your-email@gmail.com">
                <label for="email" class="form-label">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="password">
                <label for="senha" class="form-label">Senha</label>
            </div>
            <div class="form-check text-start my-3">
                <label for="relembrar" class="form-check-label">Relembrar</label>
                <input type="checkbox" class="form-check-input" id="relembrar" name="relembrar">
            </div>

            <button class="btn btn-primary w-100 py-2">Cadastrar

            </button>
        </form>
    </main>
</body>

</html>