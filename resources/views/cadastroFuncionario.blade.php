@extends('padrao')

@section('content')
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
@endsection