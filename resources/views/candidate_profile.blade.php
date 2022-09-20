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

            <h1 class="row m-auto mb-4">Create your candidate profile</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="step step-1 row gy-4 active">
                <div class="col-sm-6">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-sm-12">
                    <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="github" class="form-control" placeholder="Github">
                </div>
                <div class="col-sm-6">
                    <select name="education"class="form-select">
                        <option value="">Choose your Education</option>
                        <option value="1">High School</option>
                        <option value="2">Bachelor's</option>
                        <option value="3">Master's</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="role_id"class="form-select">
                        <option value="">Choose your preferred Role</option>
                        <option value="1">Fullstack</option>
                        <option value="2">Front End</option>
                        <option value="3">Back End</option>
                    </select>
                </div>
                <div class="col-sm-12 d-flex justify-content-end">
                    <button class="w-25 btn btn-md next-btn" type="button">Next</button>
                </div>

            </div>
            <div class="row step gy-2 step-2">
                <h4>What programming languages do you know?</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="skills[]">
                    <label class="form-check-label">
                        HTML
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" name="skills[]">
                    <label class="form-check-label">
                        Java Script
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" name="skills[]">
                    <label class="form-check-label">
                        CSS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" name="skills[]">
                    <label class="form-check-label">
                        PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="skills[]">
                    <label class="form-check-label">
                        Python
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="6" name="skills[]">
                    <label class="form-check-label">
                        Java
                    </label>
                </div>

                <h4>What languages do you speak?</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="languages">
                    <label class="form-check-label">
                        English
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" name="languages">
                    <label class="form-check-label">
                        French
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" name="languages">
                    <label class="form-check-label">
                        German
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" name="languages">
                    <label class="form-check-label">
                        Luxembourgish
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="languages">
                    <label class="form-check-label">
                        Other
                    </label>
                </div>


                <div class="row my-4">
                    <div class="col-md-6 d-flex">
                        <button class="w-50 btn btn-md prev-btn" type="button">Previous</button>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <input type="submit" class="w-50 btn btn-primary btn-md profile-btn" value="Create Profile">
                    </div>
                </div>
            </div>


        </form>



    </div>
    <script>
        const steps = Array.from(document.querySelectorAll("form .step"));
        const nextBtn = document.querySelectorAll("form .next-btn");
        const prevBtn = document.querySelectorAll("form .prev-btn");
        const form = document.querySelector("form");

        nextBtn.forEach((btn) => {
            btn.addEventListener("click", () => {
                changeActiveState("next");
            });
        });
        prevBtn.forEach((btn) => {
            btn.addEventListener("click", () => {
                changeActiveState("prev");
            });
        });

        function changeActiveState(btn) {
            let index = 0;
            const active = document.querySelector(".active");
            index = steps.indexOf(active);
            steps[index].classList.remove("active");
            if (btn === "next") {
                index++;
            } else if (btn === "prev") {
                index--;
            }
            steps[index].classList.add("active");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
