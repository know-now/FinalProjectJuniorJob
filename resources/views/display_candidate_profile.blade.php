<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    <h2>Welcome to your profile.</h2>
    <p>First Name: {{ $candidate->first_name }}</p>
    <p>Last Name: {{ $candidate->last_name }}</p>
    <p>Phone Number: {{ $candidate->phone_number }}</p>
    <p>Candidate: {{ $candidate->linkedin }}</p>
    <p>GitHub: {{ $candidate->github }}</p>
    <p>Education: {{ $candidate->education }}</p>
    <p>Role: {{ $candidate_role->role }}</p>
    <span>Skills: </span>
    @foreach ($candidate_skill as $candidate)
        <span>{{ $candidate->skill}}</span>
    @endforeach
    <br>
    <span>Languages: </span>
    @foreach ($candidate_language as $candidate)
        <span>{{ $candidate->language }}</span>
    @endforeach
    <br>
</body>

</html>
