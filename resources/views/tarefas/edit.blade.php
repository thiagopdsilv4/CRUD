@extends('layouts.admin')

@section('title', 'Edição de Tarefas')

@section('content')
    <h1>Edição de tarefas</h1>

    @if($errors->any())
        @alert
            @foreach($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        @endalert
    @endif

    
    <form method="POST">
        @csrf

        <label>
            Titulo: <br>
            <input type="text" name="titulo" value="{{ $data->titulo}}">            
        </label>

        <input type="submit" value="Salvar"><br>
    </form>
@endsection