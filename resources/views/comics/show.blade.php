 @section('content')
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

     <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
         @csrf
         @method('DELETE')

         <button class="delete-button" type="submit" value="Cancella">CANCELLA </button>
         {{-- onclick="return confirm('Sei sicuro?')" --}}

     </form>
 @endsection
 @include('layout')
