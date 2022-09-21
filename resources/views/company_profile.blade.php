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
    <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="#"
            class="d-flex align-items-center justify-content-sm-evenly mb-3 mb-md-0 me-md-auto text-dark text-decoration-none gap-2">
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
    <div class="container">
        <form method="post" class="py-4 m-auto w-75">
            @csrf

            <h1 class="row m-auto mb-4">You're one step away from creating your account </h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row gy-4">
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="email" class="form-control" placeholder="email">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="contact" class="form-control" placeholder="contact">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="description" class="form-control" placeholder="description">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="company_name" class="form-control" placeholder="company_name">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="date" name="date_created" class="form-control" placeholder="established">
                </div>
                <div class="col-sm-12 col-lg-6">
                    <input type="text" name="number_of_employees" class="form-control" placeholder="number_of_employees">
                </div>
                <div class="col-sm-6">
                    <select name="role_id"class="form-select">
                        <option value="">Choose your industry/sector</option>
                        <option value="1">IT</option>
                        <option value="2">Finance</option>
                        <option value="3">Web Agencies</option>
                        <option value="4">Marketing</option>
                        <option value="5">Retail</option>
                    </select>
                </div>
                
            </div>
            

                <div class="row my-5">
                    <div class="col-lg-6 d-flex justify-content-start">
                        <input type="submit" class="w-50 btn btn-primary btn-md profile-btn" value="Create Profile">
                    </div>
                </div>
            </div>
</form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
