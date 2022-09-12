@extends('layout/app')
@section('conteudo')
<h3>Editar filme:</h3>
<form action="{{route('update.locadora', $locadora->id)}}" class="form-floating mb-3" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="filme" class="form-label">Nome do Filme:</label>
        <input type="text" class="form-control" id="filme" name="filme" value="{{$locadora->filme}}" required>
      </div>
      <div class="mb-3">
        <label for="genero" class="form-label">Genero: </label>
        <input type="text" class="form-control" id="genero" name="genero" value="{{$locadora->genero}}" required>
      </div>
      <div class="mb-3">
        <label for="ano_lancamento" class="form-label">Ano de Lançamento: </label>
        <input type="text" class="form-control" id="ano_lancamento" name="ano_lancamento" value="{{$locadora->ano_lancamento}}" required>
      </div>
      <div class="mb-3">
        <label  for="empresa" class="form-label">Empresa: </label>
        <input type="text" class="form-control" id="empresa" name="empresa" value="{{$locadora->empresa}}" required>
      </div>
      <button class="btn btn-primary" type="submit">Salvar alterações</button>
</form>
    
@endsection