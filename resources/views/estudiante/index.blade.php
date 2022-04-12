@extends('plantilla')

@section('seccion')
<section>
    <h1 class="m-4 text-center">LISTADO DE ESTUDIANTES</h1>

  

            <div class="mb-3">
                        <a href="{{ url('/estudiante/create') }}" class="btn btn-success ">Nuevo estudiante</a>
                        <a href="{{url('imprimirPersonas')}}" class="btn btn-success ">Generar PDF</a>
            </div>
  
  
    <table class="table table-bordered">
        <thead class="text-center">
            <tr class="table-dark">
                <th>ID</th>
                <th>Nombre del estudiante</th>
                <th>Número de identificación</th>
                <th>Género</th>
                <th>Grado</th>
                <th>Fecha de matrícula</th>
                <th>Fecha de nacimiento</th>
                <th>Nombre de padre</th>
                <th>Nombre de madre</th>
                <th>Correo del acudiente</th>
                <th>Eps</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr class="text-center">
                <td>{{$estudiante -> id}}</td>
                <td>{{$estudiante -> nombre}}</td>
                <td>{{$estudiante -> num_id}}</td>
                <td>{{$estudiante -> genero}}</td>
                <td>{{$estudiante -> grado}}</td>
                <td>{{$estudiante -> fecha_matricula}}</td>
                <td>{{$estudiante -> fecha_nac}}</td>
                <td>{{$estudiante -> nombre_padre}}</td>
                <td>{{$estudiante -> nombre_madre}}</td>
                <td>{{$estudiante -> correo_acudiente}}</td>
                <td>{{$estudiante -> eps}}</td>
                <td>
                    <form action="{{ url('/estudiante/'.$estudiante->id) }}" method="POST">
                        <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-warning">Editar</a>
                        @csrf
                        {{ method_field('DELETE') }}
                        <input onclick="return confirm('¿Estás seguro de eliminar el estudiante {{$estudiante -> Nombre}}?')" class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>

    </table>

    {!! $estudiantes->links() !!}
</section>
@endsection