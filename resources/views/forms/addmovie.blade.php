<form method="POST" action="{{route('movies.store')}}" id="{{ $seen ? 'seen' : 'tosee' }}{{ $movie->id }}">
    {{csrf_field()}}
    <input type="hidden" value="{{$movie->id}}" name="movie_id">
    <input type="hidden" value="{{$seen}}" name="seen">
    <input type="hidden" value="{{ count($movie->genre_ids) > 0 ? $movie->genre_ids[0] : 0 }}" name="category">
</form>
<div class="social-btn">
    <a href="" class="parent-btn seen-btn form-btn-{{ $movie->id }} link-{{$seen}}" data-movie="{{ $movie->id }}"><i class="{{$picto}}"></i>{{$button}}</a>

</div>