@extends('layouts.plantilla')
@section('title','Pagina Catecumenos')

@section('content')
    <h1>Bienvenido a la lista de Catecumenos</h1>
    <ul>
        @foreach($catecumenos as $catecumeno)
            <li>
                <a href="{{route('catecumenos.show',$catecumeno->id)}}">{{$catecumeno->name}}</a>    
            </li>
        @endforeach
    </ul>
    {{$catecumenos->links()}}
@endsection
