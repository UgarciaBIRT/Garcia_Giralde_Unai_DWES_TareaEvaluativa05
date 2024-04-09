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

<h1>Actualizar un cliente</h1>


<form method = "POST" action="/clientes/update">

    @csrf
    @method('PUT')

    <input type="hidden" name="id" value='{{$cliente->id}}'/>
    <label for="nombre">Nombre</label>
    <input id="nombre" name="nombre" value='{{$cliente->nombre}}' type="text"/>
    <label for="apellido1">Apellido1</label>
    <input id="apellido1" name="apellido1" value='{{$cliente->apellido1}}' type="text"/>
    <label for="apellido2">Apellido2</label>
    <input id="apellido2" name="apellido2" value='{{$cliente->apellido2}}' type="text"/>

    <input type="submit"/>

</form>

</div>
</body>
</html>