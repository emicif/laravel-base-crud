@forelse ($comics as $comic)
    {{ $comic->title }}

@empty
@endforelse
