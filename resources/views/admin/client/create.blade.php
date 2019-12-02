@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Nouveau Client
        <small>Ajouter un nouveau Client</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajout Client</li>
    </ol>
    <div class="espace">
    <a href="{{ url('/admin/client') }}" title="Retour">
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
                    <h3 class="box-title"><i class="far fa-save"></i> Ajouter un client</h3>
                </div>
                <!-- /.box-header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!! Form::open(['action' => 'Admin\clientController@store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('bnom','', ['class' => 'form-control', 'placeholder' => 'Saisir le nom du client','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('prenom', 'Prenom') !!}
                                {!! Form::text('bprenom','', ['class' => 'form-control', 'placeholder' => 'Saisir le prénom du client','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                           
                            <div class="form-group">
                                {!! Form::label('login', 'Nom d"utilisateur') !!}
                                {!! Form::text('blogin','', ['class' => 'form-control', 'placeholder' => 'Saisir le nom dutilisateur du client','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('passwd', 'Mot de passe') !!}
                                {!! Form::text('bpasswd','', ['class' => 'form-control', 'placeholder' => 'Saisir le mot de passe de client','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('tel', 'Téléphone') !!}
                                {!! Form::text('btel','', ['class' => 'form-control', 'placeholder' => 'Saisir le Tél du client','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('bemail','', ['class' => 'form-control', 'placeholder' => 'Saisir lemail du client','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('address', 'Addresse') !!}
                                {!! Form::textarea('baddres','', ['class' => 'form-control textarea', 'placeholder' => 'Saisir ladresse du client','required' => 'required']) !!}
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