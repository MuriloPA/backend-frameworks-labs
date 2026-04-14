<!doctype html>

<form method="GET" action="/multiplicacao">
  <input name="a" type="number" required>
  <input name="b" type="number" required>
  <button>Multiplicar</button>
</form>

@if(isset($resultado))
  <h2>Resultado: {{ $resultado }}</h2>
@endif