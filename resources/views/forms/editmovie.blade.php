<form method="POST" action="{{route('movies.update', $movie['dbMovie']->id)}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" value="{{$movie['movie']->id}}" name="movie_id">
    <input type="hidden" value="{{$seen}}" name="seen">
    <input type="hidden" value="{{$movie['movie']->genres[0]->id}}" name="category">
    <button type="submit" class="btn btn-primary" value="Send"><i class="{{$picto}}"></i>{{$button}}</button>
</form>