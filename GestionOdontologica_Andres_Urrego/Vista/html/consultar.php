<!DOCTYPE html>
<html>
<head>
<title>Sistema de Gestión Odontológica</title>
<link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
</head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
                <div class="imagen-izquierda"></div>

                    <h1>Sistema de Gestión Odontológica</h1>

                    <div class="imagen-derecha"></div>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a> </li>
                <li><a href="index.php?accion=asignar">Asignar</a> </li>
                    <li class= "activa"><a href="index.php?accion=consultar">Consultar Cita</a> </li>
                        <li><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
        </ul>
        <div id="contenido">
            <h2>Consultar Cita</h2>
                <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">
                    <table>
                        <tr>
                            <td>Documento del Paciente</td>
                                <td><input type="text" name="consultarDocumento" id="consultarDocumento"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" name="consultarConsultar"
                                        value="Consultar" id="consultarConsultar" onclick=”consultarCita()”></td>
                                        </tr>
                                    <tr>
                                <td colspan="2"><div id="paciente2"></div></td>
                        </tr>
                    </table>
                </form>
        </div>
    </body>
</html>