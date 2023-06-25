<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <title>Crud Laboratorista</title>
  <link rel="stylesheet" href="{{ asset('css/stylesCrudLaboratorista.css') }}">
  <script src="https://kit.fontawesome.com/f48a57573d.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="hv-background background wrapper">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container container-fluid">

            <a class="navbar-brand" href="{{ url('/index') }}"><img id="logoTec" src="{{ asset('/Imagenes/20230309_161828.png') }}" alt="Logo" width="200" height="60" class=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  g-col-6">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-secondary" href="{{ url('/#') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Laboratorista
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="{{ url('index') }}">Salir</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
  <form action="index">
    <section class="container-login">
      <div class="img"></div>
      <div class="container">
        <div class="colum-title">
          <h1>Informes de Laboratorio</h1>
        </div>
        <div class="colum-pdfCliente">
          <a href="{{route('crudLaboratorista.pdf')}}" class="btn btn success"><i class="fa-regular fa-file"></i></a>
        </div>
        <div class="colum-info">
          <div class="id">
            <h6>ID</h6>
          </div>
          <div class="date">
            <h6>Fecha</h6>
          </div>
          <div class="nombre_e">
            <h6>Nombre E</h6>
          </div>
          <div class="numero_p">
            <h6>N° Prueba</h6>
          </div>
          <div class="cliente">
            <h6>Cliente</h6>
          </div>
          <div class="editar">
            <h6>Editar</h6>
          </div>
          <div class="eliminar">
            <h6>Eliminar</h6>
          </div>
        </div>


@foreach ($data as $datas)

        <div class="colum-info-2">
          <div class="id-2">
           {{$datas->id}}
          </div>
          <div class="date-2">
            {{$datas->fecha}}
          </div>
          <div class="nombre_e2">
            {{$datas->nombre_empleado}}
          </div>
          <div class="numero-p2">
            {{$datas->numero_prueba}}
          </div>
          <div class="cliente-2">
            {{$datas->cliente}}
          </div>
          <div class="editar-2">
            <a class="nav-link btn btn-secondary" aria-current="page" href="{{ route('Leditar',['id'=> $datas->id]) }}">Editar</a>
          </div>
          <div class="eliminar-2">
            <a class="nav-link btn btn-secondary" aria-current="page" href="{{ route('Leliminar',['id'=> $datas->id]) }}">Eliminar</a>
          </div>
        </div>
        @endforeach
      </div>

      </div>
    </section>
  </form>
</body>
<footer class="footer footer-login">
  <div class="justify-content-center">
    <div class="col-auto">
      <p>© 2021. By Tatiana, Jhonatan, Mateo, Santiago</p>
    </div>
  </div>
  </div>
</footer>

</html>