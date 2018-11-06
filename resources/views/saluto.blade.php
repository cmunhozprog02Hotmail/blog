@extends('layout')

@section('contenido')
<h1>Saludos a {{$nombre}}</h1>

@forelse ($consolas as $consola)
    <ul>
        <li>{{$consola}}</li>
    </ul>
    
@empty
    <p>Não há consoles</p>
    
@endforelse
@stop