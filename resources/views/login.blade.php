<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf

        <p>Email:</p>
        <input type="email" name="email" id="">

        <p>Password:</p>
        <input type="password" name="password" id="">

        <input type="submit" value="Submit form">
    </form>
</body>
</html>
