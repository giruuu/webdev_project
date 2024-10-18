@extends('components.layout')

@section('title', 'About Me')

@section('content')
<div class="image">
    <img src="{{ asset('dp.png') }}" class="dp">
</div>

<div class="info">
    <h1>Education</h1>
</div>

<div class="aboutme">
    <h1>ABOUT ME</h1>

    <div class="aboutme-item">
        <h2>Hi, I'm Gian Russell Villegas. I am passionate about web development and technology. <br>
            Currently, I am pursuing a degree in BS Information Technology at Bicol University. <br> 
            Apart from coding, I enjoy playing online games, reading mangas, and watching anime. <br><br><br>
            Feel free to explore my portfolio and get to know more about my skills and projects. <br>
            If you have any questions or collaboration opportunities, don't hesitate to contact me.
        </h2>
    </div>
</div>
@endsection
