@extends('master.principal')

@section('title', 'CALCULO')


@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sistema de Calculo para Lincenciamento do AM <img id="am_ban" src="img/am.ico" alt=""></h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
      <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Cálculo Lincenciamento LI - LO - LP </h3>
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

            @inject('lists', 'App\Http\Controllers\Services\ListsController')
      

            {{ Form::open(['route' => 'salvarcalculo', 'id' => 'formcalculo' ])}}

            <label for="exampleInputEmail1">Empresa</label>
            {!! Form::text('txtNameEmpresa','', ['id' => 'txtNameEmpresa', 'class' => 'form-control' ]) !!}

            <label for="exampleInputEmail1">PORTE</label>
            {!! Form::select('ports', $lists->listports() , 1 , ['class' => 'form-control select2'] ) !!}

            <label for="exampleInputEmail1">PPD</label>
            {!! Form::select('ppds', $lists->listppds() , 1 , ['class' => 'form-control select2'] ) !!}
            <div class="box-footer">
                {{ Form::submit( 'Salvar', ['id' => 'bntcalculo', 'class' => 'btn btn-primary' ]) }}
            </div>
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

