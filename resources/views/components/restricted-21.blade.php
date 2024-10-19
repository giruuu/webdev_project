@extends('Components.Layout')

@section('title', 'Restricted 21+ Content')

@section('content')
<div class="restricted-container">
    <h1>Welcome to the Restricted Area for 21+</h1>
    <p>This content is only accessible to users who are 21 years old or older.</p>
    
    <!-- Go to Check Age Page Button -->
    <a href="{{ route('check-age') }}" class="restricted-btn">Go Back to Age Verification</a>

    <!-- Go Home Button -->
    <a href="{{ route('home') }}" class="restricted-btn">Go Home</a>
</div>
@endsection
