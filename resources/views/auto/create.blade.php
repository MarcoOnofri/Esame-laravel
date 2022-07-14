@extends('adminlte::page')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Crea annuncio</h2>
    <hr>

    <form action="{{ route('auto.store')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="mb-3">
            <label for="picture" class="form-label">Scegli immagine</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nome</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Crea annuncio</button>

    </form>

</div>


@endsection