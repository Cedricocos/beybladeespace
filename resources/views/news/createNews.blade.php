@extends('template')
@section('content')
<form method="post" action="/newsCreate">
	@csrf
	<div class="row gtr-uniform gtr-50">
		<div class="col-12 col-12-xsmall">
			<label for="title">Titre de l'actualité</label>
			<input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Titre">
			<p style="color: red;">{{ $errors->first('title') }}</p>
		</div>
		<div class="col-12 col-12-xsmall">
			<label for="image_path">Url de l'image</label>
			<input type="text" name="image_path" id="image_path" value="{{ old('image_path') }}" placeholder="Url de l'image">
			<p style="color: red;">{{ $errors->first('image_path') }}</p>
		</div>
	
		<div class="col-12">
			<label for="body">Contenu de l'actualité</label>
			<textarea name="body" id="body" placeholder="Contenu de l'article" rows="6">{{ old('body') }}</textarea>
			<p style="color: red;">{{ $errors->first('body') }}</p>
		</div>
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Enregistrer" class="primary"></li>
			</ul>
		</div>
	</div>
</form>
@endsection