<?php ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?php include 'cabecera.php'; ?>
    </head>
    <body>
        <div id="contenedor">
            <?php include 'menu.php'; ?>
            <section id="cuerpo">
                <h1>Formulario de registro</h1>
                <form role="form" id="formulario" name="miformulario" action="guardar.php" method="post">
                    <div class="form-group">
                        <label for="fornombre">Nombre del Proyecto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                               placeholder="Introduzca el nombre del proyecto" required>
                    </div>
                    <div class="form-group">
                        <label for="forautor1">Autores del Proyecto</label>
                        <input type="text" class="form-control" id="autor1" name="autor[]"
                               placeholder="Introduzca el nombre del primer autor" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="autor2" name="autor[]"
                               placeholder="Introduzca el nombre del segundo autor">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="autor3" name="autor[]"
                               placeholder="Introduzca el nombre del tercer autor">
                    </div>
                    <div class="form-group">
                        <label for="forasesor">Nombre del Asesor</label>
                        <input type="text" class="form-control" id="asesor" name="asesor"
                               placeholder="Introduzca el nombre del Asesor" required>
                    </div>
                    <div class="form-group">
                        <label for="fornota">Nota Recibida</label>
                        <input type="text" class="form-control" id="nota" name="nota"
                               placeholder="Introduzca la nota recibida">
                    </div>
                    <div class="form-group">
                        <label for="forlinea">Linea de Investigacion</label>
                        <input type="text" class="form-control" id="linea" name="linea"
                               placeholder="Introduzca la linea de investigación" required>
                    </div>

                    <button type="submit" id="btnEnviar" class="btn btn-success anchoMax">Enviar</button>
                </form>
            </section>
        </div>
    </body>
</html>