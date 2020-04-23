@extends ('layout')

@section ('content')



		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Contact Page</h1>
						<p>This is the contact page</p>
					</header>
				</div>
			</section>

			<form method="POST" action="/contact/submit">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
				  <input type="text" class="form-control" id="name"  placeholder="Enter Name">
				</div>
				<div class="form-group">
				  <label for="exampleInputEmail1">Email address</label>
				  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
				  <input type="text" class="form-control" id="subject"  placeholder="Subject">
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" rows="3"></textarea>
				  </div>
		
				<button type="submit" class="btn btn-primary">Submit</button>
			  </form>

	
		


	

@endsection