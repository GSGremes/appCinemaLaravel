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
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#AvisoExcluir">
        Excluir
      </button>
      </td>
      <div class="modal" id="AvisoExcluir" tabindex="-1" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Excluir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Deseja realmente excluir esse registro?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{route('apagar-funcionario',$dadosfuncionarios->id)}}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger"> Excluir </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
    </tr>
   @endforeach
  </tbody>
</table>



@endsection