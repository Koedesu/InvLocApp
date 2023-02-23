<div class="container">
    <?php
    /* LISTADO; INSERTAR; EDITAR; ELIMINAR; */
    $accion="listado";
    if(isset($_REQUEST['accion']))
        $accion=$_REQUEST['accion'];
    switch($accion):
        case "listado";
    ?>
    <h1 class="m-2 p-2">PRODUCTOS</h1>
    <a href="?pagina=productos&accion=insertar" class="btn btn-danger">CREAR</a>
    <table class="table">
        <thead><th>ID</th><th>NOMBRE</th><th>QR</th><th>ACCIONES</th></thead>
        <tbody>
            <?php
            $u=$user->buscar("productos","1");
            foreach($u as $r):
            ?>
            <tr>
                <td><?php echo $r['id'];?></td>
                <td><?php echo $r['nombre'];?></td>
                <td>
                    <a href="?pagina=productos&accion=editar" class="btn btn-danger">EDITAR</a>
                    <a href="?pagina=productos&accion=eliminar" class="btn btn-danger">ELIMINAR</a>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <?php
        
        break;
        case "insertar";
            if(isset($_POST['btn'])):
                var_dump($_POST);

            else:
                ?>
                <div class="col-sm-8">
                    <form action="" enctype="mutlpart/form-data" method="post">
                        <div class="form-group">
                            <label for="nombre">NOMBRE:</label>
                            <input type="text" name="nombre" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">DESCRIPCION:</label>
                            <textarea name="descripcion" required class="form control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">PRECIO:</label>
                            <input type="text" name="precio" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">CANTIDAD:</label>
                            <input type="text" name="cantidad" required class="form-control">
                        </div>
                        <input type="submit" name="btn" value="ENVIAR">
                    </form>
                </div>
                <?php
        endif;
            break;
            case "editar";
                echo "editar";
            break;
            case "eliminar";
                echo "eliminar";
            break;
        endswitch;

    ?>
</div>