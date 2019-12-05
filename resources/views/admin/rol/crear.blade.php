@extends('theme/'.$theme.'/layouts')
@section('titulo')
Crear Rol
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		@include('includes.form-error')
		@include('includes.mensaje')
		<div class="card">
			<div class="card-header border-success">
				<h3 class="card-title">Crear Rol</h3>
				<a href="{{route('rol')}}" class="btn btn-info btn-sm float-right">
					<i class="fas fa-reply-all"></i> Regresar al listado
				</a>
			</div>

			<form action="{{route('guardar-rol')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
				@csrf
				<div class="card-body">
					@include('admin.rol.form')
				</div>
			</div>
			<!-- /.card-body -->
			<div class="card-footer row">
				<div class="col-lg-3">
					
				</div>
				<div class="col-lg-6">
					@include('includes.boton-form-crear')
				</div>
			</div>
			<!-- /.card-footer -->
		</form>
	</div>
	<!-- /.card -->
</div>
</div>
@endsection
