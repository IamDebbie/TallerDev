<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estudiantes: Lista</title>

</head>

<body>
    <nav class="navbar bg-warning">
        <h2 class="m-2 text-center">LISTADO DE ESTUDIANTES</h2>


    </nav>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre estudiante</th>
                <th>Número identificación</th>
                <th>Grado</th>
                <th>Fecha matrícula</th>
                <th>Correo acudiente</th>
                <th>Eps</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
            <tr class="text-center">
                <td>{{$estudiante -> nombre}}</td>
                <td>{{$estudiante -> num_id}}</td>
                <td>{{$estudiante -> grado}}</td>
                <td>{{$estudiante -> fecha_matricula}}</td>
                <td>{{$estudiante -> correo_acudiente}}</td>
                <td>{{$estudiante -> eps}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>