@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Annunci Auto  </h1>
@stop

@section('content')
<div class="card">
<div class="card-header">
    <h1 class="card-title">Ciao</h1>
</div>
<div class="card-body">
    <p>Scegli con noi la tua nuova auto</p>
    <a href="auto">Vai alle auto</a>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop