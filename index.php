<!– PARA EJEMPLO DASC — >
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--código que incluye Bootstrap-->
        <?php include'inc/incluye_bootstrap.php' ?>
        <!--termina código que incluye Bootstrap-->

        <!-- PARA DATATABLE -->
        <link href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <!--código que incluye el menú responsivo-->
        <?php include'inc/incluye_menu.php' ?>
        <!--termina código que incluye el menú responsivo-->
        <div class="container">
            <div class="jumbotron">
                <?php if (isset($_GET['registroExito'])): ?>
                    <?php if ($_GET['registroExito']="true"): ?>
                        <div class="alert alert-success" role="alert">
                            Registro insertado con exito!!
                        </div>
                    <?php else : ?>
                        <div class="alert alert-warning" role="alert">
                            Hubo un error al insertar el registro :c
                        </div>
                    <?php endif ?>
                <?php endif ?>
                <?php if (isset($_GET['registroRefaccionExito'])): ?>
                    <?php if ($_GET['registroRefaccionExito']="true"): ?>
                        <div class="alert alert-success" role="alert">
                            Registro de refaccion insertado con exito!!
                        </div>
                    <?php else : ?>
                        <div class="alert alert-warning" role="alert">
                            Hubo un error al insertar el registro de refaccion:c
                        </div>
                    <?php endif ?>
                <?php endif ?>

            </div>
        </div>

    </body>
</html>