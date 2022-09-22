@extends('layouts.template')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />


    <section class="py-5">
        <div class="container ">
            <div class="row d-flex justify-content-center shadow-sm bg-body rounded">
                <div class="col-md-12 col-lg-8">
                    <div class="row">

                        <h2> Welcome <span class="text-danger">{{ $company->company_name }}</span></h2>
                        <div class="col-sm-6 text-center" style="background-color:rgb(201, 199, 199);">

                            <i class="bi bi-building" style="font-size: 150px; color: #00a2df;"></i>

                            <div class="card-block text-start text-white my-3">



                                <h5 class="mt-4" style="color: #00a2df;">Company Name</h5>
                                <div class="col-sm-12 d-flex justify-content-between shadow-sm p-2 rounded">
                                    <h6 class="text-muted">{{ $company->company_name }}</h6>
                                    <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                </div>
                                <h5 class="mt-4" style="color: #00a2df;">Date created</h5>
                                <div class="col-sm-12 d-flex justify-content-between shadow-sm p-2 rounded">
                                    <h6 class="text-muted">{{ $company->date_created }}</h6>
                                    <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                </div>
                                <h5 class="mt-4" style="color: #00a2df;">Industry</h5>
                                <div class="col-sm-12 d-flex justify-content-between shadow-sm p-2 rounded">
                                    <h6 class="text-muted">{{ $company_industry->industry }}</h6>
                                    <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                </div>
                                <h5 class="mt-4" style="color: #00a2df;">Number of employees</h5>
                                <div class="col-sm-12 d-flex justify-content-between shadow-sm p-2 rounded">
                                    <h6 class="text-muted">{{ $company->number_of_employees }}</h6>
                                    <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                </div>
                                <h5 class="mt-4" style="color: #00a2df;">Contacts</h5>
                                <div class="col-sm-12 d-flex justify-content-between shadow-sm p-2 rounded">
                                    <h6 class="text-muted">{{ $company->contact }}</h6>
                                    <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 bg-white round-right">
                            <h4 class="my-5 text-center">Description</h4>
                            <hr class="badge-primary w-100" />
                            <div class="row">
                                <div class="col-sm-12 d-flex justify-content-between shadow-sm p-3 mb-2 bg-body rounded">

                                    <h6 class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla
                                        sapiente eligendi nihil maxime, at delectus accusantium earum odio ad minus
                                        voluptates, ea commodi veniam repudiandae eius, pariatur voluptas doloremque porro.
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi hic, aliquid
                                        laboriosam exercitationem iusto cupiditate dolor, nam officiis et velit est incidunt
                                        in? Labore provident eveniet ducimus dolor ab excepturi.</h6>
                                    <a href="#"><i class="bi bi-pencil-square" style="color: #00a2df;"></i></a>
                                </div>

                            </div>
                            <h4 class="my-5 text-center "></h4>

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <p class="hide" style="font-size:16px">FIND A JUNIOR</p>
                                    <a href="/search_junior"><i class="bi bi-search" style="color: red; font-size: 100px;"></i></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
