<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>

		{!!  Html::style('assets/css/bootstrap.min.css') !!}
		{!! Html::style('assets/css/datetimepicker.css')  !!}

	
	</head>

	<body>
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
    			<li class="active"><a href="#">Link</a></li>
    			<li><a href="#">Link</a></li>
    		</ul>
    		<form class="navbar-form navbar-left" role="search">
    			<div class="form-group">
    				<input type="text" class="form-control" placeholder="Search">
    			</div>
    			<button type="submit" class="btn btn-default">Submit</button>
    		</form>
    		<ul class="nav navbar-nav navbar-right">
    			<li><a href="#">Link</a></li>
    			<li class="dropdown">
    				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
    				<ul class="dropdown-menu">
    					<li><a href="#">Action</a></li>
    					<li><a href="#">Another action</a></li>
    					<li><a href="#">Something else here</a></li>
    					<li><a href="#">Separated link</a></li>
    				</ul>
    			</li>
    		</ul>
    	</div>
    </nav>

		@show

		<div class="container">
			
			@yield('content')
		</div>


	
		{!! Html::script('assets/js/jquery-1.9.0.js')  !!}
		{!! Html::script('assets/js/bootstrap.min.js')  !!} 
		{!! Html::script('assets/js/jquery-1.9.0.js')  !!} 
   
  		{!! Html::script('assets/js/moment.min.js')  !!}
  		{!! Html::script('assets/js/datetimepicker.js')  !!}
  		{!! Html::script('assets/js/modal.js')  !!}
 
		<script type="text/javascript">
		 $(function () {
		  $('#datetimepicker').datetimepicker({
		   format: 'DD MMMM YYYY HH:mm',
		  });
		  
		  $('#datepicker').datetimepicker({
		   format: 'YYYY-MM-DD',
		  });
		  
		  $('#timepicker').datetimepicker({
		   format: 'HH:mm'
		  });
		 });

		 $('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').focus();
		});

		</script>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		      </div>
		      <div class="modal-body">
		        <div class="container">
		        		
		        	<div class="row">
		        		
		        		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		        			
		        			
				  	  {!! Form::open(['url' => '/prosestambah', 'class' => 'form-horizontal'])   !!}
					   	<div class="form-group">
					   		<div class="col-sm-4">
					   		{!! Form::label('NPM')  !!}
					   		{!! Form::text('npm', '', ['placeholder' => 'npm', 'class' => 'form-control', 'maxlength' => '8','required'])  !!}
					   		</div>
					   	</div>

					   	<div class="form-group">
					   		<div class="col-sm-10">
					   		{!! Form::label('Nama')  !!}
					   		{!! Form::text('nama', '', ['placeholder' => 'nama', 'class' => 'form-control'])  !!}
					   		</div>
					   	</div>

					   	<div class="form-group">
					   		<div class="col-sm-8">
					   		{!! Form::label('Tanggal Lahir')  !!}
					   		<div class='input-group date' id='datepicker'>
					   		{!! Form::text('tgl_lahir', '', ['placeholder' => 'Tanggal lahir', 'class' => 'form-control'])  !!} 
					   		  <span class="input-group-addon">
							   <span class="glyphicon glyphicon-calendar"></span>
							  </span>

					   		</div><p class="text-danger">*format perlu di perhatikan tahun-bulan-tanggal</p>
					   		</div>
					   	</div>

					   	<div class="form-group">
					   		<div class="col-sm-10">
					   		{!! Form::label('Kelas')  !!}
					   		{!! Form::select('kelas', array(
					   			'MIF' => "MIF",
					   			'MRS' => "MRS",
					   			'TIK' => "TIK"
					   		),'----isi kelas---')  !!}
					   		</div>
					   	</div>

					   	<div class="form-group">
					   		<div class="col-sm-10">
					   		{!! Form::label('Email')  !!}
					   		{!! Form::text('email', '', ['placeholder' => 'email', 'class' => 'form-control'])  !!}
					   		</div>
					   	</div>

					   	 <div class="form-group">
					   		<div class="col-sm-6">
					   		{!! Form::label('Password')  !!}
					   		{!! Form::password('password',  ['placeholder' => 'password', 'class' => 'form-control'])  !!}
					   		</div>
					   	</div>



					   	<div class="form-group">
					   		<div class="col-sm-12">
					   		{!! Form::label('Jenis Kelamin')  !!}
					   		{!! Form::radio('jenis_kelamin', 'L',true)  !!} Laki-Laki
					   		{!! Form::radio('jenis_kelamin', 'P')  !!} Perempuan
					   		</div>
					   	</div>

					   	
				  		<div class="form-group">
				  			<div class="col-sm-5">
				  				{!! Form::submit('Tambah data', ['class' => 'btn btn-success']) !!}
				  			</div>
				  		</div>
				
					  {!! Form::close() !!}




		        		</div>

		        	</div>

		        	

		        	</div>	



		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

	</body>
</html>