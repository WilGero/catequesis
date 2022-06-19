@extends('layouts.plantilla')
@section('title','Catecumeno '.$catecumeno->name)
@section('content')
    <h1>Datos personales de: {{$catecumeno->name}}</h1>
    <a href="{{route('catecumenos.edit',$catecumeno)}}">Editar</a>
    <br>
    <strong>Nombres: </strong>{{$catecumeno->name}}
    <br>
    <strong>Apellidos: </strong>{{$catecumeno->surname}}
    <br>
    <strong>Fecha de nacimiento:</strong>{{$catecumeno->birth}}
    <br>
    {{-- <a href="{{route('catecumenos.destroy',$catecumeno)}}">
        <button type="submit" >Eliminar</button>
    </a> --}}
    <form action="{{route('catecumenos.destroy',$catecumeno)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" >Eliminar</button>
    </form>
    <a href="{{route('catecumenos.index')}}">
        <button type="submit">Volver a Catecumenos</button>
    </a>
@endsection