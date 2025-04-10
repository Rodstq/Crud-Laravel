@extends('layouts.main')

@section('title', 'tela 1')

@section('content')

<div class=" d-flex flex-column align-items-center">
<h2> Cadastrar Usuário </h2>
    <form class="w-50"action="{{route('cria_dados_originais')}}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <fieldset>
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>

            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" 
            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
            name="email"
            required>

            <label for="telefone" class="form-label">Telefone</label>
            <input type="number" class="form-control" id="telefone" name="telefone" required>

            <label for="idade" class="form-label">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" required>

            <label for="cpf" class="form-label">CPF</label>
            <input type="number" class="form-control" id="cpf" name="cpf" required>

            <label for="escolaridade" class="form-label">Escolaridade</label>
            <input type="text" class="form-control" id="escolaridade" name="escolaridade" required>

            <label for="altura" class="form-label">Altura</label>
            <input type="number"  min="0" max="3" step="0.01" class="form-control" id="altura" name="altura" required>

            <label for="peso" class="form-label">Peso</label>
            <input type="number" min="0" max="500" step="0.01"  class="form-control" id="peso" name="peso" required>
        

            <button type="submit" class="btn btn-indigo my-4">Cadastrar</button>
        </fieldset>
    </form>
</div>
@endsection