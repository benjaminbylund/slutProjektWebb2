@extends('layout')

@section('title', 'Index')


@section('content')
    <h1>Grab a story</h1>
   <h3>Words</h3>

   @foreach ($words as $word)
       <li>{{ $word->word) }}</li>
   @endforeach
   <button> skapa en mening</button>
@endsection

