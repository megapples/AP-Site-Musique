@extends('layouts.app')

@section('content')

<div class="container">
<h2>Enregistrer un nouvel événement:</h2><br />
<form method="post" action="{{ route('evenements.store') }}">
@csrf
<div class="row">
	<div class="col-md-6">
	    <div class="form-group row">
	    	<label for="libelleEvenement" class="col-sm-4">Nom de l'événement:</label>
	    	<input type="text" class="form-control col-sm-6" name=libelleEvenement required>
	    </div>
	    <div class="form-group row">
	    	<label for="description" class="col-sm-4">Description:</label>
	    	<input type="text" class="form-control col-sm-6" name=description required>
	    </div>
    </div>
</div>
@endsection