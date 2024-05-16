<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
         
        <?php 
        include("include/menu.php")
        ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row mt-5">
                    <div class="col-2"></div>
                        <div class="col-lg-8 ">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">General</h5>
                                    <div id="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne" class="text-dark">
                                                        ¿Cuál es la política de devolución de la tienda?
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show"
                                                    aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Nuestra política de devolución permite devoluciones dentro de los 30 días posteriores a la recepción del pedido. Los artículos deben estar en su estado original con las etiquetas intactas.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    ¿Cómo puedo realizar un seguimiento de mi pedido?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Una vez que tu pedido haya sido enviado, recibirás un correo electrónico de confirmación con un enlace de seguimiento para rastrear tu paquete.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingThree">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    ¿Cuánto tiempo tardará en llegar mi pedido?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                El tiempo de entrega puede variar según tu ubicación y el método de envío seleccionado. Por lo general, los pedidos se entregan dentro de los 5-7 días hábiles.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">PAGOS Y SOPORTE</h5>
                                    <div id="accordion2">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingFour">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    ¿Tienen opciones de envío exprés?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Sí, ofrecemos envío exprés para aquellos que necesitan recibir su pedido de manera más rápida. Puedes seleccionar esta opción durante el proceso de pago.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingFive">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    ¿Qué medidas debo tomar para asegurarme de que la ropa me quede bien?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Te recomendamos que consultes nuestra guía de tallas antes de realizar tu compra. También puedes comunicarte con nuestro equipo de atención al cliente si necesitas ayuda adicional.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingSix">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    ¿Ofrecen descuentos para compras al por mayor?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Sí, ofrecemos descuentos especiales para compras al por mayor. Ponte en contacto con nuestro equipo de ventas para obtener más información sobre precios y disponibilidad.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <div class="col-2"></div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php 
            include("include/foter.php")
            ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>