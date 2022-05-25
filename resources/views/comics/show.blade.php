<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('layout')

    <div class="p10">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h3 class="pt10">{{ $comic->title }}</h3>
        <div class="bg-green flex p10">
            <strong>
                <p class="p10">€{{ $comic->price }}</p>
            </strong>
            <strong>
                <p class="p10 ">{{ $comic->series }}</p>
            </strong>
            <strong>
                <p class="p10">{{ $comic->sale_date }}</p>
            </strong>

        </div>

        <p class="pt10">{{ $comic->description }}</p>
        <button>
            <a href="{{ route('comics.index', $comic->id) }}">BACK</a>
        </button>
    </div>

</body>

</html>
