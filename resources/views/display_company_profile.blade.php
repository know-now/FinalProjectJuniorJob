@extends('layouts.template')

@section('content')
    <div class="container">
        <h2>Welcome to your profile.</h2>
        <p>Contact: {{ $company->contact }}</p>
        <p>Name: {{ $company->company_name }}</p>
        <p>Description: {{ $company->description }}</p>
        <p>Date created: {{ $company->date_created }}</p>
        <p>N° of employees: {{ $company->number_of_employees }}</p>
        <p>Industry: {{$company_industry->industry}}</p>
    </div>
@endsection
