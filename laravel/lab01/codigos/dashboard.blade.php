<!doctype html>

<html>

<body>

<h1>Bem-vindo, {{ $user }}!</h1>


<p>Você está logado. ✨</p>


<form method="POST" action="/logout">

@csrf

<button>Sair</button>

</form>

</body>

</html>