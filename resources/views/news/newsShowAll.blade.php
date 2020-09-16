@extends('template')
@section('content')

<main class="main">

    <div class="fill">
    @foreach ($newsAll as $news)
    <a href="/actualites/{{ $news->slug }}" class="article">
        <img src="{{ $news->image_path }}" class="img-post">
        <div class="content">
            <h1 class="black"> {{$news->title}} </h1>
            <p>{!! (substr($news->body,0,250).'...') !!}'
            <p>Posté par Michel le {{ $news->created_at }}</p>
        </div>
    </a>
    @endforeach

    </div>

</main>

@endsection
