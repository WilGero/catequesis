@extends('layouts.plantilla')
@section('title','Catecumeno '.$catecumeno)

@section('content')
    <h1>Datos personales de: {{$catecumeno->name}}</h1>

@endsection