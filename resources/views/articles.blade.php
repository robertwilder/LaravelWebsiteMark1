@extends ('layout')

@section ('content')



		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Articles Page</h1>
						<p>This is the Articles page that displays articles from a database</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>
			<div class="list">
			@foreach ($articles as $article)
				{{-- <li> --}}
					<br/>
					<h3><a href="articles/{{$article->id}}">{{$article->title}}</h3>
					<p><a href="articles/{{$article->id}}">{{$article->excerpt}}</a></p>
					<br/>
				{{-- </li> --}}
				
			@endforeach
			</div>

	
		


	

@endsection