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
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Modification d'un Client</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">

                        {!! Form::open(['action' => ['Admin\clientController@update',$edclient->id], 'method' => 'PUT']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('bnom',$edclient->nom, ['class' => 'form-control', 'placeholder' => 'Saisir le nom du
                                client','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                           
                            <div class="form-group">
                                {!! Form::label('prenom', 'Prenom') !!}
                                {!! Form::text('bprenom',$edclient->prenom, ['class' => 'form-control', 'placeholder' => 'Saisir le prénom du
                                client','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                           
                            <div class="form-group">
                                {!! Form::label('login', 'Nom d"utilisateur') !!}
                                {!! Form::text('blogin',$edclient->login, ['class' => 'form-control', 'placeholder' => 'Saisir le nom du
                                client','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('passwd', 'Mot de passe') !!}
                                {!! Form::text('bpasswd',$edclient->passwd, ['class' => 'form-control', 'placeholder' => 'Saisir le prénom du
                                client','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('tel', 'Téléphone') !!}
                                {!! Form::text('btel',$edclient->tel, ['class' => 'form-control', 'placeholder' => 'Saisir le nom du
                                client','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                          
                            <div class="form-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('bemail',$edclient->email, ['class' => 'form-control', 'placeholder' => 'Saisir le prénom du
                                client','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('address', 'Addresse') !!}
                                {!! Form::textarea('baddres',$edclient->address, ['class' => 'form-control textarea']) !!}
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