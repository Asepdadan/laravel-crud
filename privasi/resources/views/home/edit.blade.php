@extends('layout.master')

@section('title', 'Edit')

@section('sidebar')
    @parent

   
    </nav>

@endsection


<!-- section content isi -->
@section('content')
    
	<div class="row">

		<!-- coloumn pertama -->
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

			
		<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">Form Edit</h3>
				  </div>
				  <div class="panel-body">

				  					  	
				  	  {!! Form::open(['url' => '/prosesedit', 'class' => 'form-horizontal'])   !!}
					   	<div class="form-group">
					   		<div class="col-sm-4">
					   		{!! Form::label('NPM')  !!}
					   		{!! Form::text('npm', $data->npm, ['placeholder' => 'npm', 'class' => 'form-control', 'maxlength' => '8','required','readonly'])  !!}
					   		</div>
					   	</div>

					   	<div class="form-group">
					   		<div class="col-sm-10">
					   		{!! Form::label('Nama')  !!}
					   		{!! Form::text('nama', $data->nama, ['placeholder' => 'nama', 'class' => 'form-control'])  !!}
					   		</div>
					   	</div>

					   	<div class="form-group">
					   		<div class="col-sm-8">
					   		{!! Form::label('Tanggal Lahir')  !!}
					   		<div class='input-group date' id='datepicker'>
					   		{!! Form::text('tgl_lahir', '$data->tgl_lahir', ['placeholder' => 'Tanggal lahir', 'class' => 'form-control'])  !!} 
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
					   		{!! Form::text('email', $data->email, ['placeholder' => 'email', 'class' => 'form-control'])  !!}
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
				  				{!! Form::submit('Edit data', ['class' => 'btn btn-success']) !!}
				  			</div>
				  		</div>
				
					  {!! Form::close() !!}		 	


				  </div>
			</div>



		</div>
		<!-- coloumtn pertama end -->


		<!-- coloumn kedua -->
		 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
		<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
				  </div>
				  <div class="panel-body"> 

				  		<!--  modal -->
						


				  </div>
			</div>

		</div> 
		<!-- end coloumn kedua -->

	</div>








@endsection 
<!-- end section content -->