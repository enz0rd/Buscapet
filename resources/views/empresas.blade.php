@extends('layouts.main')

@section('title', 'Buscapet - Empresas')

@section('content')

@if($busca != null)
<p>Buscando por: {{$busca}}</p>
@endif



@endsection