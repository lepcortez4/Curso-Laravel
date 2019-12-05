@extends('theme/'.$theme.'/layouts')
@section('titulo')
Permisos
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title border-primary">Permisos</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Slug</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($permisos as $permiso)
							<tr>
								<td>{{ $permiso->id }}</td>
								<td>{{ $permiso->nombre }}</td>
								<td>{{ $permiso->slug }}</td>
								<td>acciones</td>
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
