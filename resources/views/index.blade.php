@extends('layout/app')
@section('conteudo')
    <h2>Filmes:</h2>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Filme</th>
              <th scope="col">Genero</th>
              <th scope="col">Ano de Lançamento</th>
              <th scope="col">Empresa</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($locadora as $filme)
                <tr>
                  <td>{{$filme->filme}}</td>
                  <td>{{$filme->genero}}</td>
                  <td>{{$filme->ano_lancamento}}</td>
                  <td>{{$filme->empresa}}</td>
                  <td>
                    <div>
                      <a type="button" class="btn btn-primary" href="{{route('edit.locadora', $filme->id)}}">Editar</a>
                    </div>
                    <div>
                      <form action="{{route('destroy.locadora', $filme->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Excluir</button>
                      </form>
                    </div>
                  </td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection