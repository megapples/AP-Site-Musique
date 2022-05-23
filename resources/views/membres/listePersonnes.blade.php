@extends('layouts.app')

@section('content')
<div class='container' style="font-family:arial">
    @foreach ($personnes AS $p)
        <li><span style="font-weight:bold">Nom/Prenom:</span> {{$p->nom}} {{$p->prenom}}</li>
        <li><span style="font-weight:bold">Pseudo:</span> {{$p->pseudo}}</li>
        <br>
    @endforeach
</div>
@endsection