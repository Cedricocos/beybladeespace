@extends('template')
@section('content')


    <h1>{{ $news->title}}</h1>
    <strong>Publié le : {{ $news->created_at }}</strong>
    <p>{!! $news->body !!}</p>
    @if (!is_null($news->image_path))
        <img 
            src="{{ $news->image_path}}">

    @endif
@endsection
