<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    if(!isset($titulo) || empty($titulo)){
        $titulo = 'Blog de Maicol';
    }
    echo "<title>$titulo</title>";
    ?>
    

    <!-- AGREGANDO ESTILOS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>