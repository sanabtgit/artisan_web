@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Nouveau Produit
        <small>Ajouter un nouveau Produit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajout Produit</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Ajout d'un Produit</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!! Form::open(['action' => 'Admin\produitController@store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('bnom','', ['class' => 'form-control', 'placeholder' => 'Saisir le nom du
                                produit','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('photo', 'Photo') !!}

                                <div class="input-group">

                                    <div class="input-group-addon">
                                        {!! Form::file('bimage',null, ['class' => 'form-control','required' =>
                                        'required']) !!}
                                    </div>
                                    <div class="input-group-addon">
                                        <img src="{{asset('admin/dist/img/avatar5.png')}}" class="direct-chat-img"
                                            alt="User Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

</div>


                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('bdescription','', ['class' => 'form-control textarea']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
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