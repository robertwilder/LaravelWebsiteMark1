@extends ('layout')

@section ('content')



<!-- Banner -->
<section id="banner">
				<div class="inner">
					<header>
						<h1>Create and article, or don't. See if I care </h1>
						<p>blalalalalalalalalalalala</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>
    <h1>New Article</h1>

    <form method="POST" action="/articles">
        @csrf
        <div class="field">
            
                <label class="label" for="title">Title</label>
            
                    <div class="control">
                         <input class="input" type="text" name="title" id="title">
                    </div>
            
        </div>


        <div class="field">
            
                <label class="label" for="excerpt">Excerpt</label>
                
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                </div>
            
        </div>
                
        <div class="field">
            
                <label class="label" for="body">Body</label>
            
            <div class="control">
                <textarea class="textarea" name="body" id="body"></textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control"></div>
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>


            

        
    </form>

@endsection