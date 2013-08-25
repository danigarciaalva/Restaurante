@extends('master')

@section('body-content')

      <div class='row'>
		  <div class='col-12 col-lg-4'>
			  <br><br>
			  {{ Form::open(array('url' => '/index.php/home'))}}
					<label>Email</label>
					<input type="text" class="form-control" id="inputEmail" placeholder="Email">
					<br>
					<label>Contraseña</label>
					<input type="password" class="form-control" id="inputPassword" placeholder="Password">
					<br>
					<div class="checkbox">
						<label>
						  <input type="checkbox"> Recordarme
						</label>
					</div>
					{{ Form::submit('Entrar', array('class' => 'btn btn-success'));}}
				{{ Form::close() }}
				<br>
		  </div>
		  <div class='col-12 col-lg-8 text-center'>
			  {{ HTML::image('img/cocina.png')}}
		  </div>
      </div>

@stop