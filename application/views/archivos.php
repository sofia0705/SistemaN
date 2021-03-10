<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap_theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js" ></script>
    <script src="js/booststrap.min.js" ></script>
   
</head>
<body>
    <div class="container">
        <div class="row">
        <h3 style="text-align:center;">Subir Documentos</h3>
    </div>

    <h1>Subir Imagen</h1>
    <form action="<?=  base_url('Archivos/subirImagen')?>" method="POST" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Titulo del imagen: </td>
        <td>
        <input type="text" name="titImagen" class="form-control">
        </td>
    </tr>
    <tr>
        <td>Imagen</td>
        <td>
        <input type="text" name="fileImagen" class="form-control">
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Guardar"></td>
    </tr>
    </table>
    </form>

    <?php echo $error; ?>
    <br><br>
    <h1>Subir y Descargar Archivos</h1>
    <form action="<?= base_url('Archivos/subirArchivo') ?>" method="POST" enctype="multipart/form-data">
        <table>
        <tr>
           <td>Titulo de Archivo: </td>
           <td><input type="text" name="titImagen" class="form-control"></td>
        </tr>
        <tr>
           <td>Imagen</td>
           <td><input type="file" name="fileImagen" class="form-control"></td>
        </tr>
           <td colspan="2"><input type="submit" value="Guardar"></td>
        <tr>
        </table>
    </form>
    <?php echo $errorArch;?> 
    <?php echo $estado; ?>
    <a href="<?= base_url('Archivos/downloads') ?>" <?php echo $archivo; ?>>Descargar</a>
    </div>
        
    
    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('public/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('public/js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('public/vvendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('public/js/demo/chart-area-demo.j') ?>"></script>
    <script src="<?= base_url('public/js/demo/chart-pie-demo.js') ?>"></script>

</body>

</html>


</body>
</html>