@extends ('layout')

@section ('content')

<!-- Banner -->
<section id="banner">
				<div class="inner">
					<header>
						<h1>This is the single article page</h1>
						<p>{{$articles->title}}</p>
					</header>
				</div>
			</section>
			
			{{-- <h1>{{$articles->title}}</h1> --}}
			<br/>
			<p>{{$articles->body}}</p>


@foreach ($articles->tags as $tag)
					
	<a href="{{route('articles.index', ['tag' => $tag->name])}}">{{$tag->name}}</a>
					
@endforeach