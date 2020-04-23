@extends ('layout')

@section ('content')


		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Articles Page</h1>
						<p>This is the Articles page that displays articles from a database</p>
					</header>
				</div>
			</section>
			@forelse ($articles as $article)
				{{-- <li> --}}
					<br/>
					<h3><a href="articles/{{$article->id}}">{{$article->title}}</h3>
					<p><a href="articles/{{$article->id}}">{{$article->excerpt}}</a></p>
					<br/>
				{{-- </li> --}}
			
                    
                @empty
                <p>No relevant articles found</p>
                {{-- this does not work yet --}}
			@endforelse
			

	
		


	

@endsection