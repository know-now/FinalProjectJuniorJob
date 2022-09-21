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
    <link rel="stylesheet" href="/css/content_style.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>@yield('title')</title>
    @yield('css')
    
</head>

<body>
    @if (Auth::user())
        <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="#"
                class="d-flex align-items-center justify-content-sm-evenly mb-3 mb-md-0 me-md-auto text-dark text-decoration-none gap-2">
                <img src="assets/find_your_junior_black_sm.png" class="img-fluid col-sm-4" alt="">
                <span class="fs-4 col-sm-6">FIND YOUR JUNIOR</span>
            </a>

            <ul class="nav nav-pills align-items-center">
                <li class="nav-item"><a href="adem" class="nav-link">Work permit in ADEM</a></li>
                <li class="nav-item"><a href="dashboard" class="nav-link">My account</a></li>
                <li class="nav-item"><a href="junior_profile" class="nav-link">Junior profile</a></li>
                <li class="nav-item"><a href="junior" class="nav-link">Junior Homepage</a></li>
                <li class="nav-item"><a href="skills" class="nav-link">Search a Junior</a></li>
                <li><a href="/">Company Homepage</a></li>
                <li class="nav-item"><a href="soft_skills" class="nav-link">Soft Skills</a></li>
                <li class="nav-item"><a href="grade" class="nav-link">Test Results</a></li>
                <li class="nav-item"><a href="junior_details" class="nav-link">Info about Junior</a></li>
            </ul>
        </nav>
    @else
        <nav>
            <div class="navbar-container">
                <div class="navbar-image">
                    <a class="navbar-brand" href="">
                        <img src="{{ URL::asset('/assets/find_your_junior_black_sm.png') }}" alt="Bootstrap">
                    </a>
                </div>
                <div class="navbar-ul">
                    <ul>
                        <li>
                            <a href="/register" class="button">Register</a>
                        </li>
                        <li>
                            <a href="/login" class="button">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif

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

    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
