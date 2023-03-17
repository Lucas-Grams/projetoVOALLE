@extends('layouts.main')

@section('title', 'Registrar Bolsista')

@section('content')
    <form method="POST" action="/store" class="row g-3">
        @csrf
        <div class="row mb-3">
            <label for="nome" class="col-sm-4 col-form-label" >Nome Completo:</label>
            <input type="text" name="nome" id="name" class="form-control" placeholder="Insira o nome completo do bolsista.">
        </div>
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Insira o e-mail do bolsista.">
        </div>
        <div class="row mb-3">
            <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Insira o CPF do bolsista.">
        </div>
        <div class="row mb-3">
            <label for="funcao" class="col-sm-2 col-form-label">Função:</label>
            <input type="text" name="funcao" id="funcao" class="form-control" placeholder="Insira a funão do bolsista.">
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-6 col-form-label">Bolsista ativo no projeto?</label>        
            <select name="status" id="status" class="form-control">
                <option value="1">Verdadeiro</option>
                <option value="0">Falso</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success" value="cadastrar">Cadastrar</button>
        <a href="/" class="btn btn-info">Voltar</a>
     </form>
          
@endsection