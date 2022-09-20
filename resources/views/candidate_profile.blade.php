@extends('layouts.template')

@section('content')
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
                    <input class="form-check-input" type="checkbox" value="1" name="languages[]">
                    <label class="form-check-label">
                        English
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="2" name="languages[]">
                    <label class="form-check-label">
                        French
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="3" name="languages[]">
                    <label class="form-check-label">
                        German
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="4" name="languages[]">
                    <label class="form-check-label">
                        Luxembourgish
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="5" name="languages[]">
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
@endsection
@section('js')
    <script src="js/profile.js"></script>
@endsection
