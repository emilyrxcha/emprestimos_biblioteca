@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <body>
        <!-- Header-->
        <div class="container px-4 px-lg-5 mt-1">

        </div>
        <header class="fundo_header">
            <div class="container px-5 px-lg-5 my-0">
                <div class="text-center text-white">
                    <h1 class="h1_header">Livros disponíveis</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-3">
                @foreach ($livros as $livro)
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 w-auto">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('200x300.jpg')}}" alt="" />
                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$livro->titulo}}</h5>
                                    <!-- Product price-->
                                    {{$livro->autor}}
                                    {{$livro->qtd_paginas}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('livro.index', $livro->id)}}">Ver</a></div>
                            </div>
                        </div>  
                    </div>
                </div>
                @endforeach
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
@endsection