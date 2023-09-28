@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
        <!-- Header-->
        <header class="bg-dark py-3">
            <div class="container px-3 text-center">
                    <div class="text-center text-white">
                        <h2 class="fdisplay-4 fw-bolder">Lista de livros</h2>
                    </div>
            </div>
        </header>

        <section id="about" class="p-2 m-2">
            <div class="container px-4">
                <div class="mb-3 text-center">
                    <a href="">
                        <button class="btn btn-outline-dark mt-auto">Obter</button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Páginas</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Disponibilidade</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="d-flex">
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
@endsection