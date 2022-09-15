<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post">
        @csrf
        <input type="text" name="first_name" placeholder="First Name">
        <br>
        <input type="text" name="last_name" placeholder="Last Name">
        <br>
        <input type="text" name="phone_number" placeholder="Phone Number">
        <br>
        <input type="text" name="linkedin" placeholder="linkedin">
        <br>
        <input type="text" name="github" placeholder="github">
        <br>
        <input type="text" name="education" placeholder="education">
        <br>
        <input type="text" name="role_id" placeholder="role">
        <br>
        <input type="submit" value="Create Profile">
    </form>
</body>
</html>