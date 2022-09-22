@extends('layouts.template')
@section('content')

<h3>Quote of the day</h3>

@foreach ($quotes as $item)
<blockquote>&ldquo; {{ $item["q"] }} &rdquo; &mdash; <footer> {{ $item["a"] }}</footer></blockquote>

@endforeach

@endsection



@endcomponent
