@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
                <div style="text-align: center;">
                <h1 style="padding-top: 30px;">BENVENUTO</h1>
                <br>
                <h3 style="position: absolute;top: 150px;left: 439px;z-index: 28;">Scegli con noi la tua nuova auto</h3>
                <div class="w-100" style="position:relative;">
        <img src="{{ asset('https://images.unsplash.com/photo-1636110293997-61960a71acaf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1056&q=80') }}">
                </div>
                <a style="position: absolute;top: 200px;left: 550px;z-index: 28;" class="btn btn-primary m-3" href="auto">Vai alle auto</a>
                
                </div>
        </div>
    </div>
</div>
@endsection
