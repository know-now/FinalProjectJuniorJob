<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form method="post">
        @csrf
        <input type="text" placeholder="email">
        <input type="text" placeholder="password">
        <input type="text" placeholder="confirm-password">
        <input type="submit">
    </form>
</body>
</html>