@section('content')
    <form autocomplete="off" action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" required name="title" />
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label for="thumb">Image URL:</label>
            <input type="text" name="thumb" />

            {{-- <input type="file" name="thumb" /> --}}
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" required name="price" />
        </div>
        <div>
            <label for="series">Series:</label>
            <input type="text" name="series" />
        </div>
        <div>
            <label for="sale_date">Sale date:</label>
            <input type="date" name="sale_date" />
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" name="type" />
        </div>

        <button type="submit">Invia</button>
    </form>
@endsection
@include('layout')
