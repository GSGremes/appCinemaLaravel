@extends('padrao')

@section('content')
<form enctype="multipart/form-data" method="post" action="{{route('cadastro-filme')}}">
    @csrf
    <div class="mb-3 form-check">
        <label for="filmeInput" class="form-label">Filme:</label>
        <input type="text" name="nomeFilme" class="form-control" id="filmeInput" >
    </div>
    <div class="mb-3 form-check">
        <label for="atoresInput" class="form-label">Atores:</label>
        <input type="text" name="atoresFilme" class="form-control" id="atoresInput">
    </div>
    <div class="mb-3 form-check">
        <label for="dataLancamentoInput" class="form-label">Data de Lançamento:</label>
        <input type="date" name="dataLancamentoFilme" class="form-control" id="dataLancamentoInput" >
    </div>
    <div class="mb-3 form-check">
        <label for="sinopseInput" class="form-label">Sinopse:</label>
    <textarea class="form-control" name="sinopseFilme" id="sinopseInput" rows="3"></textarea>
    </div>
    <div class="mb-3 form-check">
        <label for="capaInput" class="form-label">Capa:</label>
        <input class="form-control" name="capaFilme" type="file" id="capaInput">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection