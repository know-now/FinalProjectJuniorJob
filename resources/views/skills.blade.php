@extends('layouts.template')


@section('content')
    <h1>Companies, what skills do you need?</h1>

    <h2>What languages do you need?</h2>
    @foreach ($specializations as $specialization)
        <label class="container">{{ $specialization }}
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
        </label>
    @endforeach

    <label class="container">Front End
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>


    <label class="container">Back End
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <h2>What education do you need?</h2>

    <label class="container">School
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>


    <label class="container">Bachelor
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Master's degree
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
@endsection
