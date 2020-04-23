@extends ('layout')

@section ('content')



<!-- Banner -->
<section id="banner">
				<div class="inner">
					<header>
						<h1>Create and article, or don't. See if I care </h1>
						<p>blalalalalalalalalalalala</p>
					</header>
					{{-- <a href="#main" class="button big scrolly">Learn More</a> --}}
				</div>
			</section>
    <h1>New Article</h1>

    <form method="POST" action="/articles">
        @csrf
        <div class="field">
            
                <label class="label" for="title">Title</label>
            
                    <div class="control">
                         <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                         @error ('title')
                         <p class="help is-danger">{{ $errors->first('title')}}</p>
                         @enderror
                    </div>
            
        </div>


        <div class="field">
            
                <label class="label " for="excerpt">Excerpt</label>
                
                <div class="control">
                    <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>
                    @error ('excerpt')
                         <p class="help is-danger">{{ $errors->first('excerpt')}}</p>
                         @enderror
                </div>
            
        </div>
                
        <div class="field">
            
                <label class="label" for="body">Body</label>
            
            <div class="control">
                <textarea class="textarea @error('excerpt') is-danger @enderror" name="body" id="body">{{old('body')}}</textarea>
                @error ('body')
                         <p class="help is-danger">{{ $errors->first('body')}}</p>
                @enderror
            </div>
        </div>
        <div class="field">
            
            <label class="label" for="body">Tags</label>
        
        <div class="control">
            <select
                name="tags[]"
                multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>

            @error ('body')
                     <p class="help is-danger">{{ $errors->first('tags')}}</p>
            @enderror
        </div>
    </div>

        <div class="field is-grouped">
            <div class="control"></div>
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>


            

        
    </form>

@endsection