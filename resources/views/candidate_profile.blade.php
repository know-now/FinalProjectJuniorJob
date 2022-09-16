<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="#" class="d-flex align-items-center justify-content-sm-evenly mb-3 mb-md-0 me-md-auto text-dark text-decoration-none gap-2">
                <img src="assets/find_your_junior_black_sm.png" class="img-fluid col-sm-4" alt="">
                <span class="fs-4 col-sm-6">FIND YOUR JUNIOR</span>
            </a>

            <ul class="nav nav-pills align-items-center">
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
            </ul>
        </nav>
    </div>
        <div class="container">
            <form method="post" class="py-4 w-50 m-auto">
                @csrf
                <div class="row gy-4">
                    <div class="col-sm-6 col-md-3">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <input type="text" name="github" class="form-control" placeholder="Github">
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <select name="education"class="form-select">
                            <option value="">Choose your Education</option>
                            <option value="1">High School</option>
                            <option value="2">Bachelor's</option>
                            <option value="3">Master's</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <select name="role_id"class="form-select">
                            <option value="">Choose your preferred Role</option>
                            <option value="1">Fullstack</option>
                            <option value="2">Front End</option>
                            <option value="3">Back End</option>
                        </select>
                    </div>
                </div>

                <input type="submit" class="w-100 btn btn-primary btn-lg my-4 profile-btn" value="Create Profile">
            </form>



        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
</body>

</html>
