<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguajes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="inicio.html">IngSoft</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="lenguaje.php">Lenguajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Lenguajes, Framework, etc."
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <!-- body content-->
    <div class="container">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-4">Cuentanos tus experiencias!</h1>
                <p class="lead">Este espacio esta diseñado para que nos cuentes tus experiencias
                    y nos compartas las enseñanzas que tengas para que sean de apoyo para las demas personas
                </p>
                <hr class="my-4">
                <p>A continuacion encontrara los comentarios</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">-</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Asunto</th>
                        <th scope="col">Comentario</th>
                        </tr>
                    </thead>
                    <tbody id="permisos">

                    </tbody>
                </table>

            </div>

        </div>

        <form name="formulario" id="formulario" method="POST">

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                <label>Nombre Completo(*):</label>
                <input type="text" class="form-control" name="nombre_persona" id="nombre_persona" maxlength="100" placeholder="Nombre Completo" required>
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                <label>Asunto(*):</label>
                <input type="text" class="form-control" name="asunto" id="asunto" maxlength="20" placeholder="Asunto" required>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <label>Comentario:</label>
                <textarea class="form-control" name="cuerpo" id="cuerpo" maxlength="20" placeholder="Comentarios" rows="10" required></textarea>
            </div>
            
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar" > <i class="fa fa-save"> </i> Guardar </button>
                <button class="btn btn-danger" onclick="cancelarform()" type="button" id="btnCancelar" > <i class="fa fa-arrow-circle-left"> </i> Cancelar </button>
            </div>
        </form>
    </div>
    <!-- body content-->



    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Redes-->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Nuestras redes sociales:</span>
            </div>

            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>

        </section>
        <!-- Redes -->

        <!-- Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i> IngSoft
                        </h6>
                        <p>
                            Producto desarrollado para gente que quiere emprender en su carrera de ingenieria de
                            software
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Lenguajes
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">HTML</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Javascript</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">Informacion</h6>
                        <p><i class="fas fa-home me-3"></i> Bogota, Colombia</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            jlopezab@ibero.edu.co
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 601 77577778</p>
                        <p><i class="fas fa-print me-3"></i> + 350 4662110</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="">Jeisson Lopez Dev</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>


<script src="../assets/js/jquery-3.3.1.min.js"></script>s/j
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/app.min.js"></script>
<script type="text/javascript" src="../assets/js/bootbox.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-select.min.js"></script>

<script type="text/javascript" src="scripts/comentario.js"> </script>

</html>