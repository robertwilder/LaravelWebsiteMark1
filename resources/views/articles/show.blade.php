@extends ('layout')

@section ('content')

<!-- Banner -->
<section id="banner">
				<div class="inner">
					<header>
						<h1>This is the single article page</h1>
						<p>blalalalalalalalalalalala</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>
			<h1>{{$articles->title}}</h1>
	
			<p>{{$articles->body}}</p>
@endsection