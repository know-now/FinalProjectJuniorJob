@extends('layouts.template')

@section('content')
    <div class="container p-5">
        <h3>Choose any 3 or more skills for the candidate</h3>


        <form action="" method="post">
            @csrf

            <div class="container form-container g-10">
                <div class="form-check">
                    <input type="checkbox" class="btn-check" name="html" value="1" id="btn-check" autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check">HTML</label>

                    <input type="checkbox" class="btn-check" name="css" value="2" id="btn-check2"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check2">CSS</label>

                    <input type="checkbox" class="btn-check" name="bootstrap" value="3" id="btn-check3"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check3">Bootstrap</label>

                    <input type="checkbox" class="btn-check" name="javascript" value="4" id="btn-check4"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check4">Javascript</label>

                    <input type="checkbox" class="btn-check" name="git" value="5" id="btn-check5"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check5">GitHub</label>

                    <input type="checkbox" class="btn-check" name="react" value="6" id="btn-check6"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check6">React</label>

                    <input type="checkbox" class="btn-check" name="php" value="7" id="btn-check7"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check7">PHP</label>

                    <input type="checkbox" class="btn-check" name="sql" value="8" id="btn-check8"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check8">SQL</label>

                    <input type="checkbox" class="btn-check" name="agile" value="9" id="btn-check9"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check9">Agile</label>

                    <input type="checkbox" class="btn-check" name="ux" value="10" id="btn-check10"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check10">UX/UI</label>

                    <input type="checkbox" class="btn-check" name="laravel" value="11" id="btn-check11"
                        autocomplete="off" />
                    <label class="btn btn-outline-secondary btn-lg" for="btn-check11">Laravel</label>
                </div>
                <div class="form-check justify-content-center ">
                    <input type="submit" value="Search" name="search-btn" class="btn btn-primary btn-lg">
                </div>
            </div>
        </form>
    </div>

@if (isset($_POST['search-btn']))
<div class="row g-4 justify-content-center">
    <div class="col-md-6 col-lg-2 card-group">
        <div class="card bd-light border-danger">
            <div class="card-body text-center">
                @foreach ($candidates as $candidate)
                    <h3 class="card-title mb-3" style="color: #00A2DF">{{ $candidate->first_name }}</h3>
                    <p class="card-text">
                        <strong> Education : </strong> <br> {{ $candidate->education }}
                    </p>
                    <p class="card-text">
                        <strong> Skills : </strong>
                        @foreach ($candidate->skills as $skill)
                            <li> {{ $skill->skill }} </li>
                        @endforeach
                    </p>
                @endforeach
                <a href="/messenger" class="btn btn-primary">Contact Candidate</a>
            </div>
        </div>
    </div>
</div> 
@endif

@endsection
