@extends('plantilla')

@section('seccion')
<section>

    <form action="{{ url('/estudiante') }}" method="POST">
        @csrf
        <div class="container">
            <form>
                <br>
                <h2 class="m-2 text-center">AGREGAR ESTUDIANTE</h2>
                <div class="card-boy">
                    @if($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                @endif
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre del estudiante</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="num_id" class="form-label">Número de identificación</label>
                    <input type="text" class="form-control" name="num_id" id="num_id" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="genero" class="form-label">Género</label>
                    <select class="form-select" name="genero" id="genero" autocomplete="off">
                        <option>Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Fémenino">Fémenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="grado" class="form-label">Grado</label>
                    <select class="form-select" name="grado" id="grado" autocomplete="off">
                        <option>Seleccione</option>
                        <option value="Minis">Minis</option>
                        <option value="Pre-Jardín">Pre-Jardín</option>
                        <option value="Jardín">Jardín</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha_matricula" class="form-label">Fecha la matrícula</label>
                    <input type="date" class="form-control" name="fecha_matricula" id="fecha_matricula"  >
                </div>
                <div class="form-group">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" >
                </div>
                <div class="form-group">
                    <label for="nombre_padre" class="form-label">Nombre completo del padre</label>
                    <input type="text" class="form-control" name="nombre_padre" id="nombre_padre" autocomplete="off" >
                </div>

                <div class="form-group">
                    <label for="nombre_madre" class="form-label">Nombre completo de la madre</label>
                    <input type="text" class="form-control" name="nombre_madre" id="nombre_madre" autocomplete="off" >
                </div>

                <div class="form-group">
                    <label for="correo_acudiente" class="form-label">Correo del acudiente</label>
                    <input type="text" class="form-control" name="correo_acudiente" id="correo_acudiente" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="eps" class="form-label">Eps</label>
                    <input type="text" class="form-control" name="eps" id="eps" autocomplete="off" >
                </div>
                <br>
                <hr />
                <div class="text-right">
                    <input type="submit" class="btn btn-success mb-3" value="Registrar">
                    <button class="btn btn-danger mb-3">Borrar</button>
                </div>
            </form>

        </div>
</section>
@endsection