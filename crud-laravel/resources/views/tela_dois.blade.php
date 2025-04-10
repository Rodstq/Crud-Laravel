@extends('layouts.main')

@section('title', 'tela 2')

@section('content')

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

<h2> Editar Usuário </h2>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th scope="col" style="width:8%;"></th>
            <th class="headers_edit" scope="col"> Nome </th>
            <th class="headers_edit" scope="col"> email </th>
            <th class="headers_edit" scope="col"> telefone </th>
            <th class="headers_edit" scope="col"> idade </th>
            <th scope="col"> cpf </th>
            <th class="headers_edit" scope="col"> escolaridade </th>
            <th class="headers_edit" scope="col"> altura </th>
            <th class="headers_edit" scope="col"> peso </th>
            <th scope="col"> criado_em </th>
            <th scope="col"> atualizado_em </th>
            <th></th>
        </thead>
        <tbody>
        @foreach($dados as $dado)
            <tr>
            <td>
                <button onclick="abrir_edicao(this)">Editar-></button>
            </td>
            <td class="editable td">{{$dado->nome}}</td>
            <td class="editable td">{{$dado->email}}</td>
            <td class="editable td">{{$dado->telefone}}</td>
            <td class="editable td">{{$dado->idade}}</td>
            <td class="td">{{$dado->cpf}}</td>
            <td class="editable td">{{$dado->escolaridade}}</td>
            <td class="editable td">{{$dado->altura}}</td>
            <td class="editable td">{{$dado->peso}}</td>
            <td>{{$dado->criado_em}}</td>
            <td>{{$dado->atualizado_em}}</td>
            <td>
                 <form style="display:none;" class="form_editar" action="{{ route('cria_dados_editados', ['id' => $dado->id ]) }}" method="post">
                    @csrf
                    @method('PUT')

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
                 </form>  

                 <button type="button" onclick="resgatar_dados(this)"> Atualizar </button> 
            </td>
            <!-- <button onclick="resgatar_dados(this)"> Atualizar </button> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function abrir_edicao(e){
       let nodes = e.parentNode.parentNode.querySelectorAll('.editable');
       for ( let node of nodes){
            node.contentEditable = true;
       }
    }

    function resgatar_dados(e){

        event.preventDefault();

       let array_tds = [];

       let tds = e.parentNode.parentNode.parentNode.getElementsByClassName('td');

       for(let td of tds){
            array_tds.push(td.innerHTML)
       }

       let array_ths = [];

       let ths = e.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByClassName('headers_edit');

       for(let th of ths){
            array_ths.push(th.innerHTML)
       }

       let dados_input = e.parentNode.querySelectorAll('input');

       for(let i = 2; i < dados_input.length; i++ ){
            if(array_tds[i-2] == "" | array_tds[i-2] == " " | array_tds[i-2] == "<br>"){  
                window.alert('existem campos vazios na edição');
                location.reload();
                break;         
            }
                dados_input[i].value = array_tds[i-2];  
                document.querySelector(".form_editar").submit();
            }
       }
       
</script>


<!--  -->
@endsection
