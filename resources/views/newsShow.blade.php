

<h1>{{ $news->title}}</h1>
<strong>Publié le : {{ $news->created_at }}</strong>
<p>{{ $news->body }}</p>
<img 
     src="{{ $news->image_path}}">


