<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>học viết blade</title>
    <style>
        .body {
            height: 300px;
            border: 1px solid #ccc;
            display: flex;
        }
        .body-left,
        .body-right {
            display: flex;
            height: 100%;
            box-sizing: border-box;
            background: #ccc;
            flex: 1;
        }
        .body-left {
            background: green;
        }
    </style>
</head>
<body>
    <div class="header">Header</div>
    <div class="body">
        <div class="body-left">
            @yield('bodyLeft')
        </div>
        <div class="body-right">
            @yield('bodyRight')
        </div>
    </div>
    <div class="footer">Footer</div>
</body>
</html>
