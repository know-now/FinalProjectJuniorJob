<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
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
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lorem</a></li>
            </ul>
        </nav>
  
    <div class="container">
        <form method="post" class="">
            @csrf
            <div class="row gy-4">
                <div class="col-sm-6">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-sm-12">
                    <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="github" class="form-control" placeholder="Github">
                </div>
                <div class="col-sm-6">
                    <select name="education"class="form-select" >
                        <option value="">Choose your Education</option>
                        <option value="1">High School</option>
                        <option value="2">Bachelor's</option>
                        <option value="3">Master's</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="role_id"class="form-select" >
                        <option value="">Choose your preferred Role</option>
                        <option value="1">Fullstack</option>
                        <option value="2">Front End</option>
                        <option value="3">Back End</option>
                    </select>
                </div>
            </div>

            <input type="submit" class="w-100 btn btn-primary btn-lg my-4" value="Create Profile">
        </form>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
