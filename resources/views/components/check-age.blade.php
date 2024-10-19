@extends('Components.Layout')

@section('title', 'Check Age')

@section('content')
<div class="age-verification-container">
    <div class="age-verification-form">
        <h1>Age Verification</h1>
        <p>Please enter your age to continue.</p>

        <form action="{{ route('store-age') }}" method="POST">  
            @csrf  
            <div class="age-form-group">
                <label for="age">Enter your age:</label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Your age" required>
            </div>
            <button type="submit" class="age-submit-btn">Submit</button>
        </form>
    </div>
</div>
@endsection
