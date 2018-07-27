@extends('layouts.app')
@section('title')
Categorias
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        	<div class="card">
        		<div class="card-header">
        			<h3 class="card-title">Hover Data Table</h3>
        		</div>
        		<!-- /.card-header -->
        		<div class="card-body">
        			<table id="example2" class="table table-bordered table-hover datatable">
        				<thead>
        					<tr>
        						<th>Categoria</th>
        						<th>Status</th>
        					</tr>
        				</thead>
        				<tbody>
        					@foreach($categories as $category)
								<td>{{ $category->name }}</td>
								<td>{{ $category->status }}</td>
        					@endforeach
        				</tbody>
        				
        			</table>
        		</div>
        		<!-- /.card-body -->
        		<div class="card-footer">
        			<button class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Adicionar Categoria</button>
        		</div>
        	</div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

	      <!-- Modal -->
	<div id="addCategoryModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title pull-left">Adicionar Nova Categoria</h4>
	      </div>

	      <div class="modal-body">
	      	<div class="form-group">
	      		<label for="name" class="col-sm-12 control-label">Nome da Categoria</label>
	      		<div class="col-sm-12">
	      			<input type="text" class="form-control" id="name" placeholder="Nome">
	      			<span class="text-danger error-msg"><strong>Atenção!</strong> É necessário indicar o nome da categoria.</span>
	      		</div>
	      	</div>
	      
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
	        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Adicionar</button>
	      </div>
	    </div>

	  </div>
	</div>


    </section>
    <!-- /.content -->

@endsection    

@section('script')

@endsection
