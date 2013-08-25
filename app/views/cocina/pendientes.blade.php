@extends('master')

@section('nav-bar-items')
	<li class='active'><a href="#">Pendientes <span class='label label-white'><b>3</b></span></a><li>
	<li><a href="#">Mensajes</a></li>
@stop

@section('body-content')
	<div class='row text-center'>
		<div class='col-lg-4'>
			<h3><strong>Orden #13</strong></h3>
		</div>
		<div class='col-lg-8'>
			<h3><strong>Lista de platillos<span class='glyphicon glyphicon-ok'></span></strong></h3>
		</div>
	</div>
	<br>
	<div class='row'>
		<div class='col-lg-4'>
			<div id='platillos' class='list-group'>
					<a class='list-group-item active'href="#">12:32 - Mesa 3 - Juan P&eacute;rez</a>
					<a class='list-group-item' href="#">12:32 - Mesa 13 - Federico Dom&iacute;nguez</a>
					<a class='list-group-item' href="#">12:32 - Mesa 31 - Daniel Garc&iacute;a</a>
					<a class='list-group-item' href="#">12:32 - Mesa 23 - Yolanda Mart&iacute;nez</a>
					<a class='list-group-item' href="#">12:32 - Mesa 56 - Pedro P&aacute;jaro</a>
					<a class='list-group-item' href="#">12:32 - Mesa 7 - Aquiles Bailo</a>
			</div>
		</div>
		<div class='col-lg-8'>
			<div id='lista-platillos'>
				<article class='row'>
					<div class='col-lg-2 thumbnail' id='imagen'>{{ HTML::image('img/arroz.jpg')}}</div>
					<div class='col-lg-7'>
						<h4><a data-toggle="modal" href="#myModal">Nombre del platillo</a></h4>
						<p>Descripción del platillo</p>
					</div>
					<div class='col-lg-2 text-centered'>
						<div class='row'>
							<button class='btn btn-primary btn-small'>Listo</button>
							<button class='btn btn-danger btn-small'>Cancelar</button>
						</div>
					</div>
				</article>
				<article class='row'>
					<div class='col-lg-2 thumbnail' id='imagen'>{{ HTML::image('img/arroz.jpg')}}</div>
					<div class='col-lg-7'>
						<h4><a data-toggle="modal" href="#myModal">Nombre del platillo</a></h4>
						<p>Descripción del platillo</p>
					</div>
					<div class='col-lg-2 text-centered'>
						<div class='row'>
							<button class='btn btn-primary btn-small'>Listo</button>
							<button class='btn btn-danger btn-small'>Cancelar</button>
						</div>
					</div>
				</article>
				<article class='row'>
					<div class='col-lg-2 thumbnail' id='imagen'>{{ HTML::image('img/arroz.jpg')}}</div>
					<div class='col-lg-7'>
						<h4><a data-toggle="modal" href="#myModal">Nombre del platillo</a></h4>
						<p>Descripción del platillo</p>
					</div>
					<div class='col-lg-2 text-centered'>
						<div class='row'>
							<button class='btn btn-primary btn-small'>Listo</button>
							<button class='btn btn-danger btn-small'>Cancelar</button>
						</div>
					</div>
				</article>
				<article class='row'>
					<div class='col-lg-2 thumbnail' id='imagen'>{{ HTML::image('img/arroz.jpg')}}</div>
					<div class='col-lg-7'>
						<h4><a data-toggle="modal" href="#myModal">Nombre del platillo</a></h4>
						<p>Descripción del platillo</p>
					</div>
					<div class='col-lg-2 pagination-center'>
						<div class='row'>
							<button class='btn btn-primary btn-small'>Listo</button>
							<button class='btn btn-danger btn-small'>Cancelar</button>
						</div>
					</div>
				</article>
			</div>
			<div class='row text-center'>
				<div class='col-lg-12'>
					<button class='btn btn-success btn-large text-center'>Terminar orden</button>
				</div>
			</div>
		</div>	
	</div>
	<br>

  <!-- Modal -->
	<div class="modal fade" id="myModal">
	    <div class="modal-dialog">
	      	<div class="modal-content">
		        <div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          	<h4 class="modal-title">Detalles del platillo</h4>
		        </div>
		        <div class="modal-body">
		          ...
		        </div>
		        <div class="modal-footer">
		         	<button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
		        </div>
	    	</div><!-- /.modal-content -->
		 </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop