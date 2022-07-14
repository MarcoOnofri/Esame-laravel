@extends('adminlte::page')

@section('content')

<h1 class="text-center mt-3 mb-3">Le nostre auto</h1>
<hr class="mt-0 mb-2 " style="border: solid 0.5px">
<br>


<div class="container">
    <div class="row" style="justify-content: center">
          @foreach ($auto as $annuncis)
            <div class="card p-0 col-12 col-sm-6 col-md-3" style="width: 18rem; border: white solid 1px;">
                <img src="/images/{{ $annuncis->picture }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $annuncis->title }}</h5>
                  <br><br>
                  <h5 class="card-title">Prezzo: €{{ $annuncis->price }}</h5>
                  <br><br>
                  <p class="card-text">{{ $annuncis->description}} </p>
                  <a href="{{ route('auto.show', $annuncis->id) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
              @endforeach
    </div>
</div>

@endsection