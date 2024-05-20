<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
    <title>Libro Reclamaciones</title>
</head>
<body>
    <style>
        .navbar-custom {
            background-color: rgba(34, 139, 34, 0.8); /* Dark green with 80% opacity */
            }
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #d4f5d4; /* Lighter shade of green */
        }
    </style>


<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">CVALLEJO IQUITOS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Página Principal <span class="sr-only"></span></a>
            </li>
            
        </ul>
    </div>
</nav>


<div class="container centered-form">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Registro - Libro de Reclamaciones</h3>
                    <h5>Colegio Cooperativo César Vallejo</h5>
                </div>
                <div class="col-md-6">
                    @if(session()->has('data'))
                        <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                            <div class="d-flex align-items-center">
                                <div class="font-35 text-success"><i class='bx bxs-check-circle'></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 text-success">{{Session::get('data')}}</h6>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('reclamaciones.create')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" maxlength="250" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" maxlength="250" required>
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" name="domicilio" maxlength="250" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" maxlength="250" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" maxlength="250" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo (Reclamo o Queja)</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="reclamo">Reclamo</option>
                        <option value="queja">Queja</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion_objeto">Descripción del Objeto(bien o servicio)</label>
                    <input type="text" class="form-control" id="descripcion_objeto" name="descripcion_objeto" maxlength="250" required>
                </div>
                <div class="form-group">
                    <label for="descripcion_detallada">Descripción Detallada</label>
                    <textarea class="form-control" id="descripcion_detallada" name="descripcion_detallada" rows="5" maxlength="1000"></textarea>
                </div>
                <div class="form-group">
                    <label for="monto">Monto</label>
                    <input type="text" class="form-control" id="monto" name="monto" maxlength="250">
                </div>
                <br>
                <div class="form-group">
                    <label for="adjuntar_documento">Adjuntar Documento</label>
                    <input type="file" class="form-control-file" id="adjuntar_documento" name="adjuntar_documento">
                </div>
                <br>
                <div class="h-captcha" data-sitekey="d0066a1a-5904-4678-92f8-10f29a064498"></div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <br>
            <div class="card">
                <p><li>Cooperativa de Servicios Educacionales, con RUC 20207617173, con domicilio Jirón Putumayo 966, Iquitos-Perú.</li></p>
                <p><li>RECLAMO: Disconformidad relacionada a los productos o servicios</li></p>
                <p><li>QUEJA: Disconformidad no relacionada a los productos o servicios o malestar o descontento respecto a la atención al público</li></p>
                <p><li>La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo para interponer una denuncia ante el INDECOPI.</li></p>
                <p><li>proveedor deberá dar respuesta al reclamo en un plazo no mayor de treinta (30) días calendario, pudiendo ampliar el plazo hasta por treinta (30) días más, previa comunicación al consumidor</li></p>
                
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</body>
</html>