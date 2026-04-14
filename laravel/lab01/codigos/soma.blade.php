<!doctype html>

<form method="GET" action="/soma">

<input name="a" type="number" required>

<input name="b" type="number" required>

<button>Somar</button>

</form>

@if(isset($resultado))

<h2>Resultado: {{ $resultado }}</h2>

@endif