@extends('layouts.master-projects')
@section('content')
	<div class="container contenido" id="projects">
			<div class="grid infinite-scroll">
			@foreach ($albums as $album)
				<figure onClick="location.href='/album/{{$album->id}}'" class="effect-moses wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
					<img src="/img/{{$album->cover_image}}" alt="img06"/>
					<figcaption>
						<h2>{{$album->name}} <span>{{$album->id}}</span></h2>
						<p>{{$album->location}}</p>
						<a href="/album/{{$album->id}}">Ver más</a>
					</figcaption>
				</figure>
			@endforeach
			</div>
</div>
@endsection
