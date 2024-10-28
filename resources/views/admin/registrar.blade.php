<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Container principal -->
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Registrar-se</h2>
            
            <!-- Formulário de Registro -->
            <form id="registerForm" method="POST" action="{{ route('register')}}">
                @csrf
                
                <!-- Nome -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                    <div class="invalid-feedback" id="nameError"></div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    <div class="invalid-feedback" id="emailError"></div>
                </div>

                <!-- Senha -->
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                    <div class="invalid-feedback" id="passwordError"></div>
                </div>

                <!-- Confirmação de Senha -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirme a senha" required>
                    <div class="invalid-feedback" id="confirmPasswordError"></div>
                </div>

                <!-- Botão de Registro -->
                <button type="submit" class="btn btn-success w-100">Registrar</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS e Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
