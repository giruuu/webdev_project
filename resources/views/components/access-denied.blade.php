@extends('Components.Layout')

@section('title', 'Access Denied')

@section('content')
<div class="access-denied-container">
    <h1>Access Denied</h1>
    <p>Sorry, you must be at least 18 years old to access this page.</p>
    <a href="{{ url('/check-age') }}" class="access-denied-btn">Go Back</a>
</div>
@endsection
