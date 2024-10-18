@extends('components.layout')

@section('title', 'Home')

@section('content')
<div class="info">
    <div class="intro">
        <h1>Hi, I'm <br> <span>GIAN RUSSELL <br>VILLEGAS</span></h1>
        <h3>AN IT STUDENT IN BICOL UNIVERSITY <br>COLLEGE OF SCIENCE</h3>
    </div>
</div>

<div class="image">
    <img src="{{ asset('dp.png') }}" class="dp">
</div>
@endsection
