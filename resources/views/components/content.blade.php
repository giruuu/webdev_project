@extends('components.layout')

@section('title', 'Education')

@section('content')
<div class="education">
    <h1>EDUCATION</h1>

    <div class="education-item">
        <h2 style="color: blue;">COLLEGE</h2>
        <h3>BICOL UNIVERSITY</h3>
        <p>COURSE: Bachelor of Science in Information Technology</p>
        <p>YEAR: 2022</p>
        <img src="{{ asset('bu.jpeg') }}" alt="University Image">
    </div>

    <div class="education-item">
        <h2 style="color: blue;">HIGHSCHOOL</h2>
        <h3>TABACO NATIONAL HIGHSCHOOL</h3>
        <p>YEAR: 2016</p>
        <img src="{{ asset('tnhs.jpeg') }}" alt="High School">
    </div>

    <div class="education-item">
        <h2 style="color: blue;">ELEMENTARY</h2>
        <h3>TABCO NORTHWEST CENTRAL ELEMENTARY SCHOOL</h3>
        <p>YEAR: 2010</p>
        <img src="{{ asset('tnwcs.jpeg') }}" alt="Elementary School">
    </div>
</div>
@endsection
