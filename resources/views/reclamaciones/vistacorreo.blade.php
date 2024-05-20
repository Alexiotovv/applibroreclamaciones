<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Reclamo</title>
</head>
<body>
    <h1>Nuevo Reclamo Registrado</h1>
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
</body>
</html>
