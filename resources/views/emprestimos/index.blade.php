<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mini BIB</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="/">Mini BIB :P</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        {{-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white mt-3 pt-5 pb-2">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Lista de empréstimos</h1>
                {{-- <p class="lead">A functional Bootstrap 5 boilerplate for one page scrolling websites</p>
                <a class="btn btn-lg btn-light" href="#about">Start scrolling!</a> --}}
            </div>
        </header>

        <section id="about" class="p-2 m-2">
            <div class="container px-4">
                <div class="mb-3">
                    <a href="{{ route('emprestimos.create') }}">
                        <button class="btn btn-sm btn-success">Novo empréstimo</button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID A.</th>
                            <th scope="col">Aluno</th>
                            <th scope="col">ID L.</th>
                            <th scope="col">Livro</th>
                            <th scope="col">Datahora</th>
                            <th scope="col">Data Devolução</th>
                            <th width="250">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($emprestimos as $emprestimo)
                            <tr>
                                <td>{{ $emprestimo->id }}</td>
                                <td>{{$emprestimo->aluno_id}}</td>
                                <td>{{$emprestimo->aluno->nome}}</td>
                                <td>{{$emprestimo->livro_id}}</td>
                                <td>{{$emprestimo->livro->nome}}</td>
                                <td>{{ $emprestimo->datahora }}</td>
                                <td>{{ $emprestimo->data_devolucao}}</td>
                                <td>
                                    <a href="{{ route('emprestimos.edit', [$emprestimo->id]) }}"><button class="btn btn-secondary btn-sm">Editar</button></a>
                                    <a href="{{ route('emprestimos.delete', [$emprestimo->id]) }}"><button class="btn btn-danger btn-sm">Excluir</button></a>
                                    <a href="{{ route('emprestimos.devolver', [$emprestimo->id]) }}"><button class="btn btn-success btn-sm">Devolver</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex">
                    {!! $emprestimos->links() !!}
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
