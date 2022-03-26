@extends('layouts.app')
@section('content')
  <div class="row mt-4">
  	<div class="col-4"></div>
  	<div class="card p-4 col-4">
  	  <h4>Welcoe Back,{{Auth::user()->name}}</h4>
  	  <h6>This is Mithun Banerjee</h6>
  
  	</div>
  </div>

@endsection
