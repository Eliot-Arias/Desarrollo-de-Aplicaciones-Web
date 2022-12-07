<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <div class="contenedor1">
            <div class="titulo">
                <h1>Insercion de Cursos</h1>
            </div>
            <form class="formulario" id="formulario">
                <div class="formulario-input-1">
                    <label for="nombreCurso">Escriba el nombre del curso</label>
                    <input type="text" name="" id="nombreCurso">
                </div>
                <div class="formulario-input-2">
                    <label for="idEspe">Seleccione Especialidad</label>
                    <select id="idEspe">
                    </select>
                </div>
                <div class="formulario-input-3">
                    <input type="submit" class="button" value="Guardar Curso">
                </div>
                <div id="mensaje" class="mensaje">
                    
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>