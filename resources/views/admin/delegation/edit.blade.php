@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Modifier Délégation
        <small>Modifier délégation</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modifier Délégation</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Modification d'une délégation</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!! Form::open(['action' => ['Admin\delegationController@update',$eddelegation->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('bnom',$eddelegation->nom, ['class' => 'form-control', 'placeholder' => 'Saisir le nom delagation','required' => 'required']) !!}
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-12">

                           
                            <div class="form-group">
                                {!! Form::submit('Modifier', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>




                </div> <!-- /.box-body -->


            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
</section> <!-- /.content -->



@stop