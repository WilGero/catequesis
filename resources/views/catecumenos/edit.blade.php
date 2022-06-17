@extends('layouts.plantilla')
@section('title','Editar Catecumeno')

@section('content')
    <h1>Editar Datos del catecumeno</h1> 
    <form action="{{route('catecumenos.update',$catecumeno)}}" method="post">
        @csrf
        @method('put')
          <label>Nombres: 
            <br>
            <input type="text" name="name" value="{{$catecumeno->name}}">
            <br>
          </label>

          <label>Apellidos: 
            <br>
          <input type="text" name="surname" value="{{$catecumeno->surname}}">
            <br>
          </label>

          <label>Fecha de nacimiento: 
            <br>
          <input type="date" name="birth" value="{{$catecumeno->birth}}">
            <br>
            </label>
        <button type="submit">Actualizar</button>    
    </form>
    <a href="{{route('catecumenos.show',$catecumeno)}}">
        <button type="submit">Cancelar</button>
    </a>
@endsection