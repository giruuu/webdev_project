@extends('Components.Layout')

@section('title', 'Restricted Area')

@section('content')
<div class="restricted-area-container">
    <h1>Restricted Area</h1>
    <p>You have access to this area.</p>

    <!-- Go to Check Age Page Button -->
    <a href="{{ route('check-age') }}" class="restricted-btn">Go Back to Age Verification</a>

    <!-- Go Home Button -->
    <a href="{{ route('home') }}" class="restricted-btn">Go Home</a>
</div>
@endsection
