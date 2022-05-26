<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Comics</title>
</head>

<body>

    @include('layout')

    <div class="flex card-container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>{{ $comic->title }}</h3>
                <button class="bg-blue">
                    <a href="{{ route('comics.show', $comic->id) }}">DETTAGLIO</a>
                </button>
                <button class="bg-blue">
                    <a href="{{ route('comics.edit', $comic->id) }}">MODIFICA</a>
                </button>
            </div>
        @endforeach
    </div>


    <button class="bg-blue">
        <a href="{{ route('comics.create') }}">AGGIUNGI NUOVO ELEMENTO</a>
    </button>



</body>

</html>
