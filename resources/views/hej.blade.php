@extends('layout')

@section('content')

  @foreach ($results as $item)
      {{ $item->adjword }}
      {{ $item->objword }}
      {{ $item->actword }}
      {{ $item->obj2word }}
      {{ $item->locword }}
  @endforeach



    
@endsection