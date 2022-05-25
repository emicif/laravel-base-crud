<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Comics</title>
</head>

<body>
    <h1>COMICS</h1>
    <div class="flex card-container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>{{ $comic->title }}</h3>
            </div>
        @endforeach
    </div>




</body>

</html>
