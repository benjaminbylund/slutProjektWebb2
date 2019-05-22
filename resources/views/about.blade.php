@extends('layout')

@section('content')
  <header class="bg-primary text-white">
    <div class="container text-center">
        <h1>Welcome to Grab A Story</h1>
        <p class="m-0 text-center text-white"><a href="#">ABOUT</a></p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Grab your story</h2>
          <ul>
            @foreach ($results as $item)
                {{ $item->adjword }}
                {{ $item->objword }}
                {{ $item->actword }}
                {{ $item->obj2word }}
                {{ $item->locword }}
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Generate your story </h2>
          <form action="/nyttord">
            <button type="submit">Nyttord</button>
        </form>        
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2>Do not forget your last story</h2>
            <textarea name="log" id="oklart" cols="80" rows="15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, a necessitatibus dignissimos architecto, quis odio delectus, ab fugiat ipsa impedit fuga rem labore recusandae non ipsum commodi eum eaque. Ullam!</textarea>
        </div>
      </div>
    </div>
  </section>

@endsection