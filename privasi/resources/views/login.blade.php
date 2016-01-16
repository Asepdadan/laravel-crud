@extends('layout.master')

@section('title', 'Login')


	@section('sidebar')

	<nav class="navbar navbar-default" role="navigation">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Title</a>
		</div>

		
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
			</ul>
		</div>
	</nav>

	@endsection

@section('content')

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	

</div>


<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<div class="panel panel-info">
	  <div class="panel-heading">
			<h3 class="panel-title text-center">LOGIN</h3>
	  </div>
	  <div class="panel-body">
			
			{!! Form::open(['url' => '/proseslogin', 'class' => 'form-horizontal'])   !!}
 
			<div class="form-group">
		   		<div class="col-sm-12">
		   		{!! Form::label('NPM')  !!}
		   		{!! Form::text('npm', '', ['placeholder' => 'npm', 'class' => 'form-control', 'maxlength' => '8','required'])  !!}
		   		</div>
		   	</div>

	   		<div class="form-group">
		   		<div class="col-sm-12">
		   		{!! Form::label('Password')  !!}
		   		{!! Form::password('password',  ['placeholder' => 'password', 'class' => 'form-control'])  !!}
		   		</div>
		   	</div>

		   	<div class="form-group">
	  			<div class="col-sm-12">
	  				{!! Form::submit('Login', ['class' => 'btn btn-success btn-block']) !!}
	  			</div>
	  		</div>

 			{!! Form::close() !!}




	  </div>
</div>

	
</div>


<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	
	
</div>


@endsection