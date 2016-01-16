@extends('layout.master')

@section('title', 'Home')

@section('sidebar')
    @parent

   
@endsection


<!-- section content isi -->
@section('content')
    
	<div class="row">

		<!-- coloumn pertama -->
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
		<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">Form Registrasi</h3>
				  </div>
				  <div class="panel-body">
				   	

				  	  {!! Form::open(['url' => '/prosestambah', 'class' => 'form-horizontal'])   !!}
					   	<div class="form-group">
					   
					   	
					   	
					   		<div class="col-sm-4">
					   		{!! Form::label('NPM')  !!}
					   		{!! Form::text('npm', '', ['placeholder' => 'npm', 'class' => 'form-control', 'maxlength' => '8'])  !!}
					   			@if($errors->has())
					   				<span class="label label-danger">{!! $errors->first('npm') !!}</span>
					   			@endif
					   		</div>
					   	</div>
					   	

					   	<div class="form-group">
					   		<div class="col-sm-10">
					   		{!! Form::label('Nama')  !!}
					   		{!! Form::text('nama', '', ['placeholder' => 'nama', 'class' => 'form-control'])  !!}
					   		@if($errors->has())
					   				<span class="label label-danger">{!! $errors->first('nama') !!}</span>
					   			@endif
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
		<!-- coloumtn pertama end -->


		<!-- coloumn kedua -->
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
		<div class="panel panel-info">
				  <div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
				  </div>
				  <div class="panel-body">

				  	@if(Session::has('message'))

				  		<h4><span class="label label-success">{{ Session::get('message') }}</span></h4>

				  	@endif
				  	<br>
				  		<!--  modal -->
						<a href="" data-toggle="modal" data-target="#myModal"><span class="label label-success" >add</span></a>
					
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>NPM</th>
										<th>Nama</th>
										<th>Tanggal lahir</th>
										<th>Kelas</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $no = 1; ?>
								@foreach( $data as $row)

									<tr>
										<td>{{ $row->npm}}</td>
										<td>{{ $row->nama}}</td>
										<td>{{ $row->tgl_lahir}}</td>
										<td>{{ $row->kelas}}</td>
										<td><a href="hapus/{{ $row->npm }}"><span class="label label-danger" aria-hidden="true">hapus</span></a> || <a href="edit/{{ $row->npm }}"><span class="label label-danger" aria-hidden="true">edit</span></a></td>

								@endforeach	
								</tbody>
							</table>
						</div>


				  </div>
			</div>

		</div>
		<!-- end coloumn kedua -->

	</div>





@endsection 
<!-- end section content -->

