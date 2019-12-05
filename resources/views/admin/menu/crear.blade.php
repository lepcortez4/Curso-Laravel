@extends('theme/'.$theme.'/layouts')
@section('titulo')
Crear Menús
@endsection

@section('scripts')
	<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		@include('includes.form-error')
		@include('includes.mensaje')
		<div class="card card-danger">
			<div class="card-header ">
				<h3 class="card-title border-info">Crear Menus</h3>
			</div>

			<form action="{{route('guardar-menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
				@csrf
				<div class="card-body">
					@include('admin.menu.form')
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
