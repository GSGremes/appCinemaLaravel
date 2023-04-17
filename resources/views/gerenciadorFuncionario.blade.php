@extends('padrao')

@section('content')

<div class="container mt-5">
<div class="mb-3 row">
   </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Pesquisa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Por Nome" id="inputPassword">
    </div>
  </div>

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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Ot@to</td>
      <td>X</td>
      <td>x</td>
    </tr>
   
  </tbody>
</table>

</div>

@endsection