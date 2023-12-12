@extends('layouts.app')
@section('content')
<section class="container-sm my-5">
    <div class="row  movie-row pd-4">
        @forelse ($movies as $movie)
        <div class=" card  movie-col ">
            <ul>
                <li>{{$movie['title']}}</li>
                <li>{{$movie['original_title']}}</li>
                <li>{{$movie['nationality']}}</li>
                <li>{{$movie['vote']}}</li>
            </ul>
        </div>

        @empty

        @endforelse
    </div>
</section>
@endsection