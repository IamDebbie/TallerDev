<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travesuras de Winnie</title>
    <link rel="shortcut icon" href="/img/icon3.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>

<body>
  <nav class="navbar navbar-expand-sm navbar navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)" ></a>
    <img src="/img/icon2.png">
    <h3 class="m-4 text-center" style="color:white" >JARDÍN INFANTIL TRAVESURAS DE WINNIE</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Buscar">
        <button class="btn btn-dark" onclick="buscarGoogle()" type="button">Buscar</button>
      </form>
    </div>
  </div>
</nav>

    @yield('seccion')
</body>

<script>
    function buscarGoogle() {
        var text = $('#buscar').val();
        
        window.open('http://google.com/search?q=' + text);
    }
</script>

</html>