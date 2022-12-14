<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .navbar {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <ul>
                @foreach($headerList as $link)
                <li><a href="">{{ $link }}</a></li>
                @endforeach
            </ul>
        </div>
    </header>
    <h1>Hello world</h1>


</body>

</html>