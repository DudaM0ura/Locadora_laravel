@extends('layout/app')
@section('conteudo')
    <h2>Cadastrar novo filme:</h2>
    <form action="{{route('store.locadora')}}" class="form-floating mb-3" method="POST">
        @csrf
        <div class="mb-3">
            <label for="filme" class="form-label">Nome do Filme:</label>
            <input type="text" class="form-control" id="filme" name="filme" required>
          </div>
          <div class="mb-3">
            <label for="genero" class="form-label">Genero: </label>
            <input type="text" class="form-control" id="genero" name="genero" required>
          </div>
          <div class="mb-3">
            <label for="ano_lancamento" class="form-label">Ano de Lançamento: </label>
            <input type="text" class="form-control" id="ano_lancamento" name="ano_lancamento" required>
          </div>
          <div class="mb-3">
            <label  for="empresa" class="form-label">Empresa: </label>
            <input type="text" class="form-control" id="empresa" name="empresa" required>
          </div>
          <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
    
@endsection