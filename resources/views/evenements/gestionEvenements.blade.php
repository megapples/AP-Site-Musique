@extends('layouts.app')

@section('content')
<div class='container' style="font-family:arial">
    @foreach ($evenement AS $e)
    <ul>
        <li><a href="{{route('evenements.show',$e->idEvent)}}">{{$e->libelleEvenement}}</a></li>
    </ul>
    @endforeach
    <div>
        <button type="submit" class="btn btn-primary">
            {{ __("S'inscrire à cet événement") }}
        </button>
    </div>
    <div>
	    <a href="{{route('evenements.create')}}">Ajouter une nouvelle activité</a>
    </div>
</div>
@endsection