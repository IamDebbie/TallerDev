@extends('plantilla')

@section('seccion')
<section>

    <div class="container">
        <br>
        <h2 class="m-2 text-center">EDITAR ESTUDIANTE</h2>
        <hr>
        <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="POST">
            {{ method_field('PATCH') }}
            @csrf

            <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="nombre" value="{{$estudiante->nombre}}" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Número de identificación:</label>
                <input class="form-control" type="text" name="num_id" id="num_id" value="{{$estudiante->num_id}}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Género:</label>
                <input class="form-control" type="text" name="genero" id="genero" value="{{$estudiante->genero}}"  autocomplete="off" required>
              
            </div>
            <div class="form-group">
                <label>Grado:</label>
                <input class="form-control" type="text" name="grado" id="grado" value="{{$estudiante->grado}}" autocomplete="off" required>
                
            </div>
            <div class="form-group">
                <label>Fecha matrícula:</label>
                <input class="form-control" type="date" name="fecha_matricula" id="fecha_matricula" value="{{$estudiante->fecha_matricula}}" autocomplete="off" required>

            </div>
            <div class="form-group">
                <label>Fecha de nacimiento:</label>
                <input class="form-control" type="date" name="fecha_nac" id="fecha_nac" value="{{$estudiante->fecha_nac}}"  autocomplete="off" required>

            </div>
            <div class="form-group">
                <label>Nombre completo del padre:</label>
                <input class="form-control" type="text" name="nombre_padre" id="nombre_padre" value="{{$estudiante->nombre_padre}}" autocomplete="off" required>

            </div>
            <div class="form-group">
                <label>Nombre completo de la madre</label>
                <input class="form-control" type="text" name="nombre_madre" id="nombre_madre" value="{{$estudiante->nombre_madre}}" autocomplete="off" required>

            </div>
            <div class="form-group">
                <label>Correo del acudiente:</label>
                <input class="form-control" type="text" name="correo_acudiente" id="correo_acudiente" value="{{$estudiante->correo_acudiente}}" autocomplete="off"  required>

            </div>
            <div class="form-group">
                <label>Eps:</label>
                <input class="form-control" type="text" name="eps" id="eps" value="{{$estudiante->eps}}" autocomplete="off" required>
            </div>
            <br>
  
                <hr/>
            <input class="btn btn-success mb-3" type="submit" value="Guardar"></input>
        </form>
    </div>


</section>
@endsection