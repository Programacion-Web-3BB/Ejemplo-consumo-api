@if ($usuarioLoggeado === "")
    <a href="/login"> Iniciar sesion </a> <br><br>
@else 
    Bienvenido {{ $usuarioLoggeado }}. <a href="/logout"> Cerrar Sesion </a><br><br>
@endif


@foreach ($datos as $dato)
    {{ $dato['id'] }} <br>
    {{ $dato['nombre'] }} <br>
    {{ $dato['apellido'] }} <br>
    <br><br>
@endforeach



