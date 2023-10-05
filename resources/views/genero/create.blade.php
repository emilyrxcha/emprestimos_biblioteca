@extends('layouts.app')
@section('content')
<form action="{{ route('genero.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="titulo" class="form-label">Gênero</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection