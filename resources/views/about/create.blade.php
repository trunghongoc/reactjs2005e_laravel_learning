<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/about/create" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">
        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>
