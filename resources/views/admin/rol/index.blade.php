@extends('theme/'.$theme.'/layouts')
@section('titulo')
Roles
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		@include('includes.form-error')
		@include('includes.mensaje')
		<div class="card border-top-info">
			<div class="card-header border-primary">
				<h3 class="card-title">Roles</h3>
				<a href="{{route('crear-rol')}}" class="btn btn-success btn-sm float-right">
					<i class="fas fa-plus-circle"></i> Nuevo Registro
				</a>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th class="width70"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($datas as $data)
							<tr>
								<td>{{ $data->nombre }}</td>
								<td class="">
									<a href="{{route("editar-rol",['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
										<i class="fas fa-edit text-primary"></i>
									</a>
									<form action="{{route("eliminar-rol", ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
										@csrf @method('delete')
										<button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
											<i class="fas fa-trash-alt text-danger"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
			<!-- /.card-body -->
			<div class="card-footer clearfix">
				<ul class="pagination pagination-sm m-0 float-right">
					<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
		<!-- /.card -->
	</div>
</div>
@endsection
