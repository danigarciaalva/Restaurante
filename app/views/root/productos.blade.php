@extends('master')

@section('nav-bar-items')
	<li class='active'><a href="#">Productos</a></li>
	<li><a href="#empleados">Insumos</a></li>
	<li><a href="#empleados">Empleados</a></li>
	<li><a href="#roots">Administradores</a></li>
	<li class='dropdown'>
		<a class='dropdown-toggle' data-toggle='dropdown' href="#">
			Opciones <span class='caret'></span>
		</a>
		<ul class='dropdown-menu right'>
			<li><a href="#password">Cambiar contraseña</a></li>
			<li><a href="#exit">Salir</a></li>
		</ul>
	</li>
@stop

@section('body-content')
	<div class='row'>
		<div class='col-12 col-lg-4'>
			<div class='panel panel-primary'>
				<div class='panel-heading'>Categorías</div>
				<ul class='list-group'>
					<a class='list-group-item active' href="#">Desayunos</a>
					<a class='list-group-item' href="#">Entradas</a>
					<a class='list-group-item' href="#">Platos principales</a>
					<a class='list-group-item' href="#">Postres</a>
					<a class='list-group-item' href="#">Bebidas</a>
				</ul>
				<div class='panel-footer'>
					<button class='btn btn-default'>Agregar</button>
					<button class='btn btn-default'>Modificar</button>
					<button class='btn btn-default'>Eliminar</button>	
				</div>
			</div>
		</div>
		<div class='col-12 col-lg-8'>
			<div class='panel panel-primary'>
				<div class='panel-heading'>Productos</div>
				<ul class='list-group'>
					<a class='row list-group-item active'>
						<div class='col-2 col-lg-2 thumbnail'>{{ HTML::image('img/arroz.jpg')}}</div>
						<div class='col-7 col-lg-7'>
							<h4>Producto</h4>
							<p>Descripcion del producto</p>
						</div>
						<div class='col-2 col-lg-2 pagination-center'>
							<p><strong>Precio</strong></p>
							<p><strong>$12.43</strong></p>
						</div>
					</a>
					<a class='row list-group-item'>
						<div class='col-2 col-lg-2 thumbnail'>{{ HTML::image('img/arroz.jpg')}}</div>
						<div class='col-7 col-lg-7'>
							<h4>Producto</h4>
							<p>Descripcion del producto</p>
						</div>
						<div class='col-2 col-lg-2 pagination-center'>
							<p><strong>Precio</strong></p>
							<p><strong>$12.43</strong></p>
						</div>
					</a>
					<a class='row list-group-item'>
						<div class='col-2 col-lg-2 thumbnail'>{{ HTML::image('img/arroz.jpg')}}</div>
						<div class='col-7 col-lg-7'>
							<h4>Producto</h4>
							<p>Descripcion del producto</p>
						</div>
						<div class='col-2 col-lg-2 pagination-center'>
							<p><strong>Precio</strong></p>
							<p><strong>$12.43</strong></p>
						</div>
					</a>
					<a class='row list-group-item'>
						<div class='col-2 col-lg-2 thumbnail'>{{ HTML::image('img/arroz.jpg')}}</div>
						<div class='col-7 col-lg-7'>
							<h4>Producto</h4>
							<p>Descripcion del producto</p>
						</div>
						<div class='col-2 col-lg-2 pagination-center'>
							<p><strong>Precio</strong></p>
							<p><strong>$12.43</strong></p>
						</div>
					</a>
				</ul>
				<div class='panel-footer'>
					<button class='btn btn-default'>Agregar</button>
					<button class='btn btn-default'>Modificar</button>
					<button class='btn btn-default'>Eliminar</button>
				</div>
			</div>
		</div>
	</div>
@stop