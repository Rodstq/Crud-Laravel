@extends('layouts.main')

@section('title', 'tela 2')

@section('content')

<h2> Editar Usuário </h2>

    <table class="table table-striped">
        <thead>
            <th scope="col"> Nome </th>
            <th scope="col"> email </th>
            <th scope="col"> telefone </th>
            <th scope="col"> idade </th>
            <th scope="col"> cpf </th>
            <th scope="col"> escolaridade </th>
            <th scope="col"> altura </th>
            <th scope="col"> peso </th>
            <th scope="col"> criado_em </th>
            <th scope="col"> atualizado_em </th>
            <th></th>
        </thead>
        <tbody>
        @foreach($dados as $dado)
            <tr>
            <td>{{$dado->nome}}</td>
            <td>{{$dado->email}}</td>
            <td>{{$dado->telefone}}</td>
            <td>{{$dado->idade}}</td>
            <td>{{$dado->cpf}}</td>
            <td>{{$dado->escolaridade}}</td>
            <td>{{$dado->altura}}</td>
            <td>{{$dado->peso}}</td>
            <td>{{$dado->criado_em}}</td>
            <td>{{$dado->atualizado_em}}</td>
            <td>
                <button> Atualizar </button>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
