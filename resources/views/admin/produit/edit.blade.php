@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Modifier Produit
        <small>Modifier un Produit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modifier Produit</li>
    </ol>
    <div class="espace">
    <a href="{{ url('/admin/produit') }}" title="Retour">
    <button class="btn bg-gradient-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
    </div>  
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="box-title">Modifier un Produit</h3>
                </div>
                <!-- /.box-header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!! Form::open(['action' => ['Admin\produitController@update',$edproduit->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('bnom',$edproduit->nom, ['class' => 'form-control', 'placeholder' => 'Saisir le nom du
                                chauffeur','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('photo', 'Photo') !!}

                                <div class="input-group">

                                    <div class="input-group-addon">
                                        {!! Form::text('bimage',$edproduit->image, ['class' => 'form-control','required' =>
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

                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('bdescription',$edproduit->description, ['class' => 'form-control textarea']) !!}
                            </div>
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