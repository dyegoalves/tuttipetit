@extends('master.principal')
@section('title', 'CALCULO')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sistema de Calculo para Receitas</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
      <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Calculo para Receitas <i class="fa fa-calculator" aria-hidden="true"></i></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
             <h1>Calculo</h1>
            {{ Form::close() }}
        </div>
          <!-- /.card-body -->
        <div class="card-footer">
            <!-- Data por extenssa   -->
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection
