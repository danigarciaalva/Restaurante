@extends('master')

@section('nav-bar-items')
	<li><a href="#">Productos</a></li>
	<li class='active'><a href="#insumos">Insumos</a></li>
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
					<a class='list-group-item active' href="#">Cereales, legumbres y patatas</a>
					<a class='list-group-item' href="#">Carne, pescados y huevos</a>
					<a class='list-group-item' href="#">Frutas y verduras</a>
					<a class='list-group-item' href="#">Aceites, margarinas y manteca</a>
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
				<div class='panel-heading'>Insumos</div>
				<ul class='list-group'>
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
