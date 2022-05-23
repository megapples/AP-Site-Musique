@extends('layouts.app')

@section('content')
<div class="container">
<h2>{{$evenement->libelleEvenement}}</h2>
<ul>
	<li>Lieu : {{$evenement->lieu}}</li>
	<li>Date de début : {{$evenement->dateDebut}}</li>
	<li>Date de fin : {{$evenement->dateFin}}</li>
</ul>
@endsection