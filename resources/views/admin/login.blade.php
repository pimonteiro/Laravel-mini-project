<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h3>Please login to the website</h3>
    <form method="POST" action="authUser">
        {{ csrf_field() }}

        Username:
        <br>
        <input type="text" name="username" id="username" value="">
        <br>
        Password:
        <br>
        <input type="password" name="password" id="password" value="">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>