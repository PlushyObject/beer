@extends('app')

@section('content')
  @foreach($beers as $beer)

    <h1>{{$beer->name}}</h1>

  @endforeach
@stop

  