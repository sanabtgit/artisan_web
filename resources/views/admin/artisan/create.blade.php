@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Nouveau Artisan
        <small>Ajouter un nouveau Artisan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajout Artisan</li>
    </ol>
   
         <div class="espace">
    <a href="{{ url('/admin/artisan') }}" title="Retour">
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
                    <h3 class="box-title"><i class="far fa-save"></i> Ajouter un Artisan</h3>
                </div>
                <!-- /.box-header -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            {!! Form::open(['action' => 'Admin\artisanController@store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom :') !!}
                                {!! Form::text('bnom','', ['class' => 'form-control', 'placeholder' => 'Saisir le nom de l&rsquo;artisan','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                                      <!--  id	nom	prenom	email	address	face	twitt	created_at	updated_at	delegation_id -->

                            <div class="form-group">
                                {!! Form::label('prenom', 'Prénom :') !!}
                                {!! Form::text('bprenom','', ['class' => 'form-control', 'placeholder' => 'Saisir le prénom de l&rsquo;artisan','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                           
                            <div class="form-group">
                                {!! Form::label('address', 'Addresse :') !!}
                                {!! Form::text('baddress','', ['class' => 'form-control', 'placeholder' => 'Saisir l&rsquo;addresse de l&rsquo;artisan','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">                     
                        <div class="form-group">
                                {!! Form::label('delegation_id', 'Délégation :') !!}
                                {!! Form::select('delegation_id',$tdelegation,null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('face', 'facebook :') !!}
                                {!! Form::text('bface','', ['class' => 'form-control', 'placeholder' => 'www.facebook.com/','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('twitt', 'twitter :') !!}
                                {!! Form::text('btwitt','', ['class' => 'form-control', 'placeholder' => 'www.twitter.com/','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('email', 'E-mail :') !!}
                                {!! Form::text('bemail','', ['class' => 'form-control', 'placeholder' => 'addressemail@gmail.com','required' => 'required']) !!}
                            </div>
                        </div>
                        
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

                </div> <!-- /.box-body -->

            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
    </div>
</section> <!-- /.content -->



@stop