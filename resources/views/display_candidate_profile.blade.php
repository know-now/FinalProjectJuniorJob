@extends('layouts.template')
@section('content')
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  
    <section class="py-5">
        <div class="container ">
            <div class="row d-flex justify-content-center shadow-sm bg-body rounded">
                    <div class="col-md-12 col-lg-6">
                        <h2> Welcome <span class="text-danger">{{ $candidate->first_name }}</span></h2>
                        <div class="row">
                            <div class="col-sm-4" style="background-color:rgb(201, 199, 199);">
                                <div class="card-block text-center text-white">
                                    <i class="bi bi-person-workspace" style="font-size: 150px; color: #00a2df;"></i>
                                    <h5 class="mt-4" style="color: #00a2df;" >FIRST NAME</h5>
                                    <p>{{ $candidate->first_name }}</p>
                                    <h5 class="mt-4" style="color: #00a2df;">LAST NAME</h5>
                                    <p>{{ $candidate->last_name }}</p>
                                    <a href="#"><i class="bi bi-pencil-square"
                                            style="font-size: 18px; color: #00a2df;"></i></a>
                                </div>

                            </div>
                            <div class="col-sm-8 bg-white round-right">
                                <h4 class="my-5 text-center">PERSONAL INFORMATION</h4>
                                <hr class="badge-primary w-100" />
                                <div class="row">
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <i class="bi bi-telephone-fill"></i>
                                        <h6 class="text-muted">{{ $candidate->phone_number }}</h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <i class="bi bi-github"></i>
                                        <h6 class="text-muted">{{ $candidate->github }}</h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div
                                        class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <i class="bi bi-linkedin"></i>
                                        <h6 class="text-muted">{{ $candidate->linkedin }}</h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                </div>
                                <h4 class="my-5 text-center ">SKILSS & PREFERENCES</h4>
                                <hr class="badge-primary">
                                <div class="row">
                                    <div class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <p class="">Education</p>
                                        <h6 class="text-muted">{{ $candidate->education }}</h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <p class="">Role</p>
                                        <h6 class="text-muted">{{ $candidate_role->role }}</h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <p class="">Skills</p>
                                        <h6 class="text-muted">
                                            @foreach ($candidate_skill as $candidate)
                                                <span>{{ $candidate->skill }}</span>
                                            @endforeach
                                        </h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">
                                        <p class="">Languages</p>
                                        <h6 class="text-muted">
                                            @foreach ($candidate_language as $candidate)
                                                <span>{{ $candidate->language }}</span>
                                            @endforeach
                                        </h6>
                                        <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                    </div>
                                </div>
                             
                        
                            </div>
                        </div>
                    </div>
            </div>
    </section>

@endsection
