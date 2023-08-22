@extends('layouts.app')

@section('content')

<h1>Tarefas</h1>


<form action="{{ route('tarefas.index') }}" method="GET">
    
    <input type="text" name="busca" placeholder="Buscar Tarefa">
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>Título</th>
            <th>Concluída</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            @foreach($tarefas as $tarefa)
                <tr>
                <td>{{$tarefa->id}}</td>
                <td>{{$tarefa->categoria}}</td>
                <td>{{$tarefa->titulo}}</td>
                <td>{{$tarefa->concluida}}</td>
                <td>
                    <a href="#">Editar</a> {{-- route('tarefas.edit', $tarefa->id) --}}
                    <a href="#">Excluir</a> {{-- route('tarefas.destroy', $tarefa->id) --}}
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
    
@endsection