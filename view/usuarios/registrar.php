<html>
    <head>
        <title>Registro de Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body style=" background-image: url(../imagenes/christin-hume-Hcfwew744z4-unsplash.jpg)">
        <div style="background-color: rgba(0, 0, 0, 0.65);">
            <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration text-white" style="border-radius: 15px; background: linear-gradient(0turn, #1b6a8c, #5e5e8e);">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registra tus datos</h3>
                                <form action="index.php?action=registro" method="post">

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" name="cc" class="form-control form-control-lg" />
                                                <label class="form-label" for="cc">Cedula</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" name="nombre" class="form-control form-control-lg" />
                                                <label class="form-label" for="nombre">Nombre</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <input type="text" name="apellido" class="form-control form-control-lg" />
                                                <label class="form-label" for="apellido">Apellido</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <h6 class="mb-2 pb-1">Genero: </h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="genero" 
                                                       value="Femenino" checked />
                                                <label class="form-check-label" for="femaleGender">Femenino</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="genero" 
                                                       value="Masculino" />
                                                <label class="form-check-label" for="genero">Masculino</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="email" name="email" class="form-control form-control-lg" />
                                                <label class="form-label" for="email">Email</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <input type="tel" name="pass" class="form-control form-control-lg" />
                                                <label class="form-label" for="pass">Contraseña</label>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="mt-4 pt-2">
                                        <input class="btn text-white bg-dark btn-lg" type="submit" value="Registrame!" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>      
    </body>
</html>
