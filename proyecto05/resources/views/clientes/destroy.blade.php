<!DOCTYPE html>
<html>
<head>
    <title>Cliente app</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('clientes') }}">Ver clientes</a></li>
        <li><a href="{{ URL::to('clientes/create') }}">Crear un cliente</a>
    </ul>
</nav>

<h1>Borrar un cliente</h1>


<form method = "POST" action="/clientes/delete">

    @csrf
    @method('DELETE')

    <input type="hidden" name="id" value='{{$id}}'/>

    <input type="submit"/>

</form>

</div>
</body>
</html>