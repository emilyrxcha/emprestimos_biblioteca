@extends('layouts.app')

@section('title', 'Erro 404')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Biblioexpress</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Biblioexpress</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">  
                        <li class="nav-item"><a class="nav-link" href="perfil">Perfil</a></li> 
                        <li class="nav-item"><a class="nav-link" href="sobre">Sobre</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <div class="container px-4 px-lg-5 mt-3">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center pb-3"><input type="text" name="" id="" placeholder="Pesquisar" class="input-group input-text form-control"></div>
            </div>
        <header class="bg-dark py-5">
            <div class="container px-5 px-lg-5 my-0">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Livros disponíveis</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-3">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 w-auto">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('200x300.jpg')}}" alt="" />
                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Título</h5>
                                    <!-- Product price-->
                                    Autor
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Obter</a></div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
       <!-- <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>