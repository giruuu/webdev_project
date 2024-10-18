@extends('components.layout')

@section('title', 'Middleware')

@section('content')
<div class="act_content">
    <h1>Activity: MIDDLEWARE</h1>

    <div class="activity-description">
        <p>This activity involves creating a middleware called "CheckAge". It prompts the user for their age before granting access to the website.</p>
    </div>

    <div class="screenshots">
        <h2>Screenshots</h2>

        <div class="screenshot-item">
            <img src="mid-pic1.png" alt="Screenshot 1">
            <img src="mid-pic2.png" alt="Screenshot 2">
            <img src="mid-pic3.png" alt="Screenshot 3">
            <p>This is when u enter below the limit of age 18<br>This will take you to the ACCESS DENIED PAGE.</p>
        </div>

        <div class="screenshot-item">
            <img src="mid-pic4.png" alt="Screenshot 4">
            <img src="mid-pic5.png" alt="Screenshot 5">
            <img src="mid-pic6.png" alt="Screenshot 6">
            <p>This is when u enter age 18 <br>This will take you to the RESTRICTED AREA PAGE WHICH WILL LET YOU ENTER THE WEBSITE.</p>
        </div>

        <div class="screenshot-item">
            <img src="mid-pic7.png" alt="Screenshot 7">
            <img src="mid-pic8.png" alt="Screenshot 8">
            <img src="mid-pic9.png" alt="Screenshot 9">
            <p>This is when u enter age for 21 or above<br>This will take you to the RESTRICTED AREA 21+ PAGE WHICH WILL LET YOU ENTER THE WEBSITE.</p>
        </div>

        <div class="screenshot-item">
            <img src="mid-pic10.png" alt="Screenshot 10">
            <img src="mid-pic11.png" alt="Screenshot 11">
            <p>This is the ROUTES for this activity</p>
        </div>

        <div class="screenshot-item">
            <img src="mid-pic12.png" alt="Screenshot 12">
            <p>This is the CONTROLLERS for this activity<br>
            This AgeController validates the user's age input, stores it in the session, and redirects the user to different routes based on the age provided.<br>
            This is typically used to control access to certain features or content based on age restrictions.</p>
        </div>

        <div class="screenshot-item">
            <img src="mid-pic13.png" alt="Screenshot 12">
            <img src="mid-pic14.png" alt="Screenshot 14">
            <p>This is the MIDDLEWARE for this activity<br>
            This middleware checks the user's age from the session before allowing access to a route. <br>
            If the user does not meet the required age, they are redirected to an "Access Denied" page. 
            If the age check passes, the request continues as normal.</p>
        </div>

        <div class="screenshot-item">
            <img src="mid-pic15.png" alt="Screenshot 15">
            <p>This is the bootstrap/app.php for this activity<br>This configuration file sets up a Laravel application by defining routes for web and console, adding a health check endpoint (/up), and organizing middleware.<br>
             It registers global middleware like LogRequests for all requests and assigns aliases for specific middleware, such as CheckAge, for certain routes. </p>
        </div>


    </div>
</div>
@endsection
