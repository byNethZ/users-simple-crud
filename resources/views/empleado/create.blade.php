Formulario de creación de empleado
<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @include('empleado.form',['modo'=>'Crear']);
</form>
