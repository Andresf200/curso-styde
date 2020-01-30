@extends('layout')
@section('title','Usuario {$id}')
@section('content')
<h1>{{ e($title)}} </h1>
<hr>

<ul>
    @forelse ($users as $user)
    <li>{{$user}} </li>
    @empty
        <li>no hay usuarios registrados.</li>
    @endforelse
</ul>
@endsection

@section('sidebar')
    <h2>Barra Lateral Personzalizada!</h2>
    @endsection