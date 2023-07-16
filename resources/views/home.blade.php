@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h3 style="text-align: center">Selamat {{ Auth::user()->name }}</h3>
        </div>
    </div>
</div>
@endsection
