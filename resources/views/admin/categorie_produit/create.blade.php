@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Nouvelle Catégorie
        <small>Ajouter une nouvelle catégorie</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajouter Catégorie</li>
    </ol>
    <div class="espace">
    <a href="{{ url('/admin/categorie_produit') }}" title="Retour">
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
                <h3 class="box-title"><i class="far fa-save"></i> Ajouter une catégorie</h3>
                </div>
                <!-- /.box-header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!! Form::open(['action' => 'Admin\categorieController@store', 'method' => 'POST','enctype'=>'multipart/form-data','files' =>true]) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('bnom','', ['class' => 'form-control', 'placeholder' => 'Saisir le nom de catégorie','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">    
                           {!! Form::label('imagecat', 'Photo :') !!}
                                {!! Form::file('imagecat', null) !!}
                            </div>
                        </div>
                    </div>
                   
           


                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('bdescription','', ['class' => 'form-control textarea']) !!}
                            </div>
                            <div class="row">
                         <div class="col-md-3">                      </div>
                         <div class="col-md-3">                        </div>
                         <div class="col-md-3"> 
                             <div class="form-group">
                             <button type="submit" class="btn btn-success" id="form_submit" name="form[submit]"> <i class="far fa-plus-square"></i> Créer</button>

                            
                                 {!! Form::close() !!}</div>                     
                            </div>
                            <div class="col-md-3">                      
                            </div>
                    </div>
                        </div>
                        

                    </div>




                </div> <!-- /.box-body -->


            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
     </div>
</section> <!-- /.content -->



@stop