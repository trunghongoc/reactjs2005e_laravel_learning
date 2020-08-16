<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme moiws user</title>
</head>
<body>
    <form action="/users/create" method="POST">
        @csrf
        <p>Name:</p>
        <input type="text" name="name">
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif

        <p>Email:</p>
        <input type="text" name="email">
        @if($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
        @endif

        <input type="submit" value="submit"/>
    </form>
</body>
</html>
