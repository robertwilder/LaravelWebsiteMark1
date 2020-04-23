@extends ('layout')

@section ('content')



<!-- Banner -->
<section id="banner">
				<div class="inner">
					<header>
						<h1>Go on edit the article I dare You </h1>
						<p>blalalalalalalalalalalala</p>
					</header>
				</div>
			</section>
    <h1>Edit</h1>

    <form method="POST" action="/articles/{{$article->id}}">
        @csrf
        @method("PUT")

        <div class="field">
            
                <label class="label" for="title">Title</label>
            
                    <div class="control">
                         <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                    </div>
            
        </div>


        <div class="field">
            
                <label class="label" for="excerpt">Excerpt</label>
                
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
            
        </div>
                
        <div class="field">
            
                <label class="label" for="body">Body</label>
            
            <div class="control">
                <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control"></div>
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>


            

        
    </form>

@endsection