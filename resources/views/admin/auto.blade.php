@extends('adminlte::page')

@section('content')


<h1 class="text-center mt-5">Tutte le nostre auto</h1>

<div class="container">
    <div class="row">
    <td><a class="btn btn-primary m-3" href="{{ route('auto.create') }}">Crea</a></td>
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Modello</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Azione</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($auto as $auto)
                            <tr>
                                <th scope="row" style="vertical-align:inherit !important;">{{ $auto->id }}</th>
                                <td style="padding: 0 !important;"><img src="/images/{{ $auto->picture }}" width="150px" ></td>
                                <td style="vertical-align:inherit !important;">{{ $auto->title }}</td>
                                <td style="vertical-align:inherit !important;">{{ $auto->price }}</td>
                                <td style="vertical-align:inherit !important;">{{ $auto->description }}</td>
                                <td style="vertical-align:inherit !important;"><a class="btn btn-info" href="{{ route('auto.show', $auto->id) }}">Vedi</a></td>
                                <td style="vertical-align:inherit !important;"><a class="btn btn-success" href="{{ route('auto.edit', $auto->id) }}">Modifica</a></td>
                                <td style="vertical-align:inherit !important;">
                                    <form action=" {{ route('admin.auto.delete', $auto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>


@endsection