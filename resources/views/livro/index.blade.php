@extends('layouts.app')
@section('content')
{{$livro->titulo}} 
{{$livro->autor}} 
{{$livro->qtd_paginas}}
{{$livro->sinopse}} 
{{$livro->genero_id}}
@endsection