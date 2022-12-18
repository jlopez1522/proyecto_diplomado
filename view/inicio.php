<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
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
            <a class="navbar-brand" href="inicio.php">IngSoft</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
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
            <div class="carrusel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" height="500px" src="./../assets/images/ingenieria.png" alt="introduccion">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" height="500px" src="./../assets/images/lenguajes.png" alt="ingenieria">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" height="500px" src="./../assets/images/codigo.png" alt="lenguajes">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>

            <hr style="color: #0056b2;" />

            <div class="video">
                <div class="card-deck">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/ht4LFdcZhCw?rel=0&showinfo=0&controls=1"></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">¿Que es un Ingeniero de Software?</h5>
                            <p class="card-text">Veamos un caso mas de lo que es ser un ingeniero de software y lo que
                                conlleva aprender sobre la programacion de software.</p>
                            <p class="card-text"><small class="text-muted">Ultima Actualizacion Hace 1 hora</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/R-OKEq1zLuY?rel=0&showinfo=0&controls=1"></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">¿Cuanto pagan en Ingeniera de Software?</h5>
                            <p class="card-text">Lo mas importante, cuanto se ganara por trabajar en esta carrera y asi
                                mismo que debemos hacer para ganar mas.</p>
                            <p class="card-text"><small class="text-muted">Ultima Actualizacion Hace 1 hora</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/imjldCO3En0?rel=0&showinfo=0&controls=1"></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">¿Estudiar Ingenieria de Software?</h5>
                            <p class="card-text">Alguna vez han pensando que ventajas nos daria estudiar una carrera
                                como ingeniera de software.</p>
                            <p class="card-text"><small class="text-muted">Ultima Actualizacion Hace 1 hora</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="color: #0056b2;" />

            <div class="container contact">
                <div class="row">
                    <div class="col-sm-6">
                        <h2> Hola! Contactame...</h2>
                        <label> Mi nombre es Jeisson Andres Lopez, cuento con 12 años de experiencia en el area de
                            desarrollo de software y puedo guiarte en un proceso de crecimiento sobre las tecnologias de
                            hoy
                            en dia</label>

                        <img src="./../assets/images/me.png" class="img-fluid" alt="Responsive image">
                    </div>

                    <div class="col-sm-6">
                        <div class="well well-sm">
                            <form class="form-contact" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-12">
                                            <input id="fname" name="name" type="text" placeholder="Nombre"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-user bigicon"></i></span>
                                        <div class="col-md-12">
                                            <input id="lname" name="name" type="text" placeholder="Apellido"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-envelope bigicon"></i></span>
                                        <div class="col-md-12">
                                            <input id="email" name="email" type="text" placeholder="Correo Electronico"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-phone-square bigicon"></i></span>
                                        <div class="col-md-12">
                                            <input id="phone" name="phone" type="text" placeholder="Telefono"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i
                                                class="fa fa-pencil-square bigicon"></i></span>
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="message" name="message"
                                                placeholder="Ingrese su mensaje para contactarnos con usted."
                                                rows="7"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>