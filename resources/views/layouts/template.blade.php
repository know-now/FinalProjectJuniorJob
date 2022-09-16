<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&family=League+Spartan&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/footer_style.css">
    <link rel="stylesheet" href="/css/navbar_style.css">
    <title>@yield('title')</title>
    @yield('css')
</head>

<body>
    <nav>
        <div class="navbar-container">
            <div class="navbar-image">
                <a class="navbar-brand" href="">
                    <img src="{{ URL::asset('/assets/find_your_junior_black sm.png') }}" alt="Bootstrap">
                </a>
            </div>
            <div class="navbar-ul">
                <ul>
                    <li>
                        <a href="" class="button">Register</a>
                    </li>
                    <li>
                        <a href="" class="button">LogIn</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav>
        <li><a href="/adem">Work permit in ADEM</a></li>
        <li><a href="/dashboard">My account</a></li>
        <li><a href="/junior_profile">Junior profile</a></li>
        <li><a href="/junior">Junior Homepage</a></li>
        <li><a href="/skills">Search a Junior</a></li>
        <li><a href="/">Company Homepage</a></li>
        <li><a href="/soft_skills">Soft Skills</a></li>
        <li><a href="/grade">Test Results</a></li>
        <li><a href="/junior_details">Info about Junior</a></li>
    </nav>
    
    <div class="content">
        @yield('content')
    </div>



<footer>
    <div class="container text-center">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-4 col-md-4">
                <div class="footer-logo">
                    <img src="{{ URL::asset('/assets/find_your_junior_black.png') }}" alt="">
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="footer-heading">
                    <h3>About Us</h3>
                </div>
                <p>A Place to Find The Talent of Tommorrow </p>
                <p>Platform for Juniors to start carrer</p>
                <p></p>
                <p></p>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="footer-heading">
                    <h3>Contact</h3>
                </div>
                <p>info@findyourjunior.io</p>
                <p>+352 123 456 789</p>

                <ul>
                    <li><a href=""><span class="fab fa-facebook" aria-hidden="true"></span> <span
                                class="sr-only">Facebook</span></a></li>
                    <li><a href=""><span class="fab fa-twitter" aria-hidden="true"></span> <span
                                class="sr-only">Tweeter</span></a></li>
                    <li><a href=""><span class="fab fa-linkedin-in" aria-hidden="true"></span> <span
                                class="sr-only">LinkedIn</span></a></li>
                </ul>

            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
</body>

</html>
