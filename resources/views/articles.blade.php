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
			<div>
			@foreach ($articles as $article)
				<li>
				<h3>{{$article->title}}</h3>
				<p><a href="#">{{$article->excerpt}}</a></p>
				<p>{{$article->body}}</p>
			@endforeach
				</li>
			</div>

	
		


	

@endsection