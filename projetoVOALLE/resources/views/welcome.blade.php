    @extends('layouts.main')

    @section('title', 'Lista de Bolsistas')

    @section('content')

    <h3>Bolsistas já cadastrados:</h3>

    <table class="table table-striped">
        <tr>
            <th>Nome do Bolsista</th>
            <th>Função do Bolsista</th>
            <th>Ver Mais</th>
        </tr>
        @foreach($bolsistas as $row)
            <tr>
                <td>{{$row->nome}}</td>
                <td>{{$row->funcao}}</td>
                <td><a href="/events/{{ $row->id }}">Detalhes</a></td>
            </tr>
        @endforeach   
    </table>
    
    <a href="/events/register" class="btn btn-info">Registrar</a>


    @endsection