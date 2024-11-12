<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con Autogenerar Código</title>
    <link rel="stylesheet" href="estilo.css">
    <script>
    function generarCodigo() {
        var codigo = Math.floor(Math.random() * 1000000).toString().padStart(6, '0');
        document.getElementById("codigoGenerado").value = codigo;
    }
</script>
</head>
<body>
    <header>
        <h2 id="centrado">Formulario de registro de empleados</h2>
        <img src="img/bannerEmpleados.jpg" width="500" height="214" alt="Banner Empleados"/>
    </header>
    <form action="" method="post">
        <label for="nombres">Nombres:</label><br>
        <input type="text" id="nombres" name="nombres" required><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>
        
        <label form="estado civil">Estado Civil:</label><br>
        <select name="selEstado">
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Viudo">Viudo</option>
            <option value="Divorciado">Divorciado</option>
        </select><br><br>

        <label for="sexo">Sexo:</label><br>
        <input type="radio" name="rdSexo" value="M"/> Masculino<br>
        <input type="radio" name="rdSexo" value="F"/> Femenino<br>
        <br><br>

        <label for="codigoGenerado">Código Generado:</label><br>
        <input type="text" id="codigoGenerado" name="codigoGenerado" readonly><br><br>

        <button type="button" onclick="generarCodigo()">Autogenerar Código</button>
        <br><br>
    </form>
    <footer>
        <h6 id="centrado">Todos los derechos reservados 
                          - Lic. Manuel Torres</h6>
    </footer>
</body>
</html>
