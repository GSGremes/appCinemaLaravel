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
      <td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAlterarFun-{{$dadosfuncionarios->id}}">
          Alterar
        </button>
      </td>
      <div class="modal" id="modalAlterarFun-{{$dadosfuncionarios->id}}" tabindex="-1" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Excluir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Deseja realmente excluir o(a) funcionário(a): {{$dadosfuncionarios->id}}?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="post" action="{{route('cadastro-funcionario')}}">
    @csrf
    <div class="mb-3 form-check">
        <label for="filmeInput" class="form-label">Nome:</label>
        <input type="text" name="nomeFun" class="form-control" id="filmeInput" >
    </div>
    <div class="mb-3 form-check">
        <label for="Email" class="form-label">Email</label>
        <input type="email" name="emailFun" class="form-control" id="emailInput">
    </div>
    <div class="mb-3 form-check">
        <label for="WhatsappInput" class="form-label">Whatsapp</label>
        <input type="text" name="whatssappFun" class="form-control" id="whatsappInput" >
    </div>
    <div class="mb-3 form-check">
        <label for="cpfInput" class="form-label">CPF</label>
        <input type="text" name="cpfFun" class="form-control" id="cpfInput">
    </div>
    <div class="mb-3 form-check">
        <label for="senhaInput" class="form-label">Senha</label>
        <input type="password" name="senhaFun" class="form-control" id="senhaInput">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
              </div>
            </div>
          </div>
        </div>
        </div>
      <td>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteFun-{{$dadosfuncionarios->id}}">
        Excluir
      </button>
      </td>
      <div class="modal" id="modalDeleteFun-{{$dadosfuncionarios->id}}" tabindex="-1" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Excluir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Deseja realmente excluir o(a) funcionário(a): {{$dadosfuncionarios->id}}?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
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