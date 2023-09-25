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
                <h1 class="fw-bolder">Lista de alunos</h1>
                {{-- <p class="lead">A functional Bootstrap 5 boilerplate for one page scrolling websites</p>
                <a class="btn btn-lg btn-light" href="#about">Start scrolling!</a> --}}
            </div>
        </header>

        <section id="about" class="p-2 m-2">
            <div class="container px-4">
                <div class="mb-3">
                    <a href="{{ route('alunos.create') }}">
                        <button class="btn btn-sm btn-success">Novo Aluno</button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefones</th>
                            <th width="160">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->id }}</td>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->matricula }}</td>
                                <td>{{ $aluno->endereco }}</td>
                                <td>@foreach ($aluno->telefones as $telefone)

                                        @if (!$telefone->numero)
                                              
                                            @endif
                                            {{$telefone->numero}}<hr>
                                            @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('alunos.edit', [$aluno->id]) }}"><button class="btn btn-secondary btn-sm">Editar</button></a>
                                    <a href="{{ route('alunos.delete', [$aluno->id]) }}"><button class="btn btn-danger btn-sm">Excluir</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex">
                    {!! $alunos->links() !!}
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
