<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Reclamo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            line-height: 1.6;
        }
        .email-footer {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 5px 5px;
            font-size: 12px;
            color: #888;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Nuevo Reclamo Registrado</h1>
        </div>
        <div class="email-body">
            <p><strong>DNI:</strong> {{ $reclamo['dni'] }}</p>
            <p><strong>Nombre:</strong> {{ $reclamo['nombre'] }}</p>
            <p><strong>Apellidos:</strong> {{ $reclamo['apellidos'] }}</p>
            <p><strong>Domicilio:</strong> {{ $reclamo['domicilio'] }}</p>
            <p><strong>Email:</strong> {{ $reclamo['email'] }}</p>
            <p><strong>Teléfono:</strong> {{ $reclamo['telefono'] }}</p>
            <p><strong>Tipo:</strong> {{ $reclamo['tipo'] }}</p>
            <p><strong>Descripción del Objeto:</strong> {{ $reclamo['descripcion_objeto'] }}</p>
            <p><strong>Descripción Detallada:</strong> {{ $reclamo['descripcion_detallada'] }}</p>
            <p><strong>Monto:</strong> {{ $reclamo['monto'] }}</p>
        </div>
        <div class="email-footer">
            <p>&copy; 2024 [Servicios AyWSolutionSAC]. Todos los derechos reservados.</p>
            <p><a href="aywsolution.com">Visite nuestro sitio web</a> | <a href="#">Servicios de CorreosCorporativos</a></p>
        </div>
    </div>
    
</body>
</html>
