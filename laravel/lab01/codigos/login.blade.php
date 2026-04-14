<!doctype html>

<html>

<body>

<h1>Login</h1>


@if (session('error'))

<p style="color:red">{{ session('error') }}</p>

@endif


<form method="POST" action="/login">

@csrf {{-- token CSRF gerado automaticamente --}}

<label>Usuário:

<input name="user" required>

</label><br>

<label>Senha:

<input type="password" name="password" required>

</label><br>

<button>Entrar</button>

</form>

</body>

</html>