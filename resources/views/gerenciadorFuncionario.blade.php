@extends('padrao')

@section('content')

<div class="container mt-5">
  <form method="get" action="{{route('gerenciar-funcionario')}}">
<div class="mb-3 row">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomeFun" id="inputPesquisar" placeholder="Digite o nome do funcionário">
    </div>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-outline-success">Pesquisar</button>
    </div>
  </div>
  </form>

<table class="table table-success table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Alterar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dadosfuncionario as $dadosfuncionarios)
    <tr>
      <th scope="row">{{$dadosfuncionarios->id}}</th>
      <td>{{$dadosfuncionarios->nomeFun}}</td>
      <td>{{$dadosfuncionarios->emailFun}}</td>
      <td><a href="{{route('mostrar-funcionario',$dadosfuncionarios->id)}}">Alterar</a></td>
      <td>
        <form action="{{route('apagar-funcionario',$dadosfuncionarios->id)}}" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"> Excluir </button>
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>

@endsection