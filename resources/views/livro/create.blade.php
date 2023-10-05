@extends('layouts.app')
@section('content')
<div class="criar">
  <form>
      @csrf
      <div class="mb-3">
        <label for="titulo" class="form-label">Título do Livro</label>
        <input type="text" class="form-control" id="titulo" name="titulo">
      </div>
      <div class="mb-3">
        <label for="autor" class="form-label">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor">
      </div>
      <div class="mb-3">
          <label for="sinopse" class="form-label">Sinopse</label>
          <input type="text" class="form-control" id="sinopse" name="sinopse">
        </div>
        <div class="mb-3">
          <label for="qtd_paginas" class="form-label">Quantidade de páginas</label>
          <input type="number" class="form-control" id="qtd_paginas" name="qtd_paginas">
        </div>
        <div class="mb-3">
          <label for="genero" class="form-label">Gênero</label>
          <select name="genero_id" id="genero_id" class="form-control">
              @foreach ($generos as $genero)
              <option value="{{$genero->id}}">{{$genero->nome}}</option>
              @endforeach
          </select>

        </div>
        <div class="mb-3">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn">
        </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
@endsection