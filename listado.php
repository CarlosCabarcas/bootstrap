<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?php include 'cabecera.php'; ?>
    </head>
    <body>
        <div id="contenedor">
            <?php include 'menu.php'; ?>
            <section id="cuerpo">
                <h1>Lista de Proyectos</h1>
                <form action="buscar.php" method="post" id="buscador">
                    <select class="form-control" name="campo" id="campo">
                        <option value="nombre">Nombre</option>
                        <option value="autor1">Autor</option>
                        <option value="asesor">Asesor</option>
                    </select>
                    <input type="text" class="form-control" id="criterio" name="criterio"
                               placeholder="Introduzca un criterio de busqueda" />
                    <button class="btn btn-success">Buscar</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>AUTOR 1</th>
                            <th>AUTOR 2</th>
                            <th>AUTOR 3</th>
                            <th>ASESOR</th>
                            <th>NOTA</th>
                            <th>FECHA</th>
                            <th>LINEA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $fila): ?>
                            <tr>
                                <td><?= $fila['id'] ?></td>
                                <td><?= $fila['nombre'] ?></td>
                                <td><?= $fila['autor1'] ?></td>
                                <td><?= $fila['autor2'] ?></td>
                                <td><?= $fila['autor3'] ?></td>
                                <td><?= $fila['asesor'] ?></td>
                                <td><?= $fila['fecha'] ?></td>
                                <td><?= $fila['nota'] ?></td>
                                <td><?= $fila['linea'] ?></td>
                                <td>
                                    <a class="boton" href="">
                                        <img src="img/editar.png" alt="" />
                                    </a>
                                    <a class="boton" href="http://localhost/bootstrap/eliminar.php?id=<?= $fila['id'] ?>">
                                        <img src="img/delete.png" alt="" />
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </div>
    </body>
</html>