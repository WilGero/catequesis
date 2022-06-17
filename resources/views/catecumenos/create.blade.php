@extends('layouts.plantilla')
@section('title','Registrar Catecumeno')

@section('content')
    <h1>Aqui podras registrar un catecumeno</h1>
    <form action="{{route('catecumenos.store')}}" method="post">
        @csrf
          <label>Nombres: 
            <br>
            <input type="text" name="name">
            <br>
          </label>

          <label>Apellidos: 
            <br>
          <input type="text" name="surname">
            <br>
          </label>

          <label>Fecha de nacimiento: 
            <br>
          <input type="date" name="birth">
            <br>
            </label>
        <button type="submit">Registrar</button>    
    </form>
    <a href="{{route('catecumenos.index')}}">
        <button type="submit">Volver a Catecumenos</button>
    </a>
@endsection
