@extends('layouts.app')
@section('content')
  <div class="row mt-4">
  	<div class="col-4"></div>
  	<div class="card p-4 col-4">
  	  <h4>Login Your Account</h4>
  		<form action="{{route('login')}}" method="post">
  			@csrf
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" name="email" placeholder="Type Your Email">
		    
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password" placholder="Password">
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Login</button>
		</form>
  	</div>
  </div>

@endsection
