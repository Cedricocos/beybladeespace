@extends('template')
@section('content')

<main class="main">
    <div class="fillsolo">
        <div class="fillsolo-content">
            <h1 class="black">{{ $news->title}}</h1>
            @if (!is_null($news->image_path))
                <img 
                    src="{{ $news->image_path}}">

            @endif
            <p class="black">{!! $news->body !!}</p>
            <strong class="black">Publié le : {{ $news->created_at }}</strong>
        </div>
    </div>
</main>
@endsection
