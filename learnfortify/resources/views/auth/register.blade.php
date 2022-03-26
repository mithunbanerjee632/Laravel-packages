@extends('layouts.app')
@section('content')
  <div class="row mt-4">
  	<div class="col-4"></div>
  	<div class="card p-4 col-4">
  	  <h4>Register a New Account</h4>
  		<form action="{{route('register')}}" method="post">
  			@csrf
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Type Your Name">
		    
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" name="email" placeholder="Type Yout Email">
		    
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password" placholder="Password">
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
		    <input type="password" class="form-control" name="password_confirmation" placholder="Retype Password">
		  </div>
		  <button type="submit" class="btn btn-primary">Register</button>
		</form>
  	</div>
  </div>

@endsection
