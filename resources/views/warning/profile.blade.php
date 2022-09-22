@extends('layouts.template')
@section('content')
    @if ($user->type === 'candidate')
        <div class="container">
            <h2>Click on <a href="/profile/create">Create a Profile</a> to access the rest of the website and your dashboard.
            </h2>
        </div>
    @else
        <div class="container">
            <h2>Click on <a href="/company/create">Create a Company Profile</a> to access the rest of the website and your dashboard.
            </h2>
        </div>
    @endif
@endsection
