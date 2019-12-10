@extends('adminlte::page')

@section('title')
@section('content')

<section class="content-header">
    <h1>
        Modifier Artisan
        <small>Modifier un Artisan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modifier Artisan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Modification d'un Artisan</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                        {!! Form::open(['action' => ['Admin\artisanController@update',$edartisan->id], 'method' => 'PUT']) !!}
                         
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom :') !!}
                                {!! Form::text('bnom',$edartisan->nom, ['class' => 'form-control', 'placeholder' => 'Saisir le nom de l&rsquo;artisan','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                                      <!--  id	nom	prenom	email	address	face	twitt	created_at	updated_at	delegation_id -->

                            <div class="form-group">
                                {!! Form::label('prenom', 'Prenom :') !!}
                                {!! Form::text('bprenom',$edartisan->prenom, ['class' => 'form-control', 'placeholder' => 'Saisir le prénom de l&rsquo;artisan','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                           
                            <div class="form-group">
                                {!! Form::label('address', 'Addresse :') !!}
                                {!! Form::text('baddress',$edartisan->address, ['class' => 'form-control', 'placeholder' => 'Saisir l&rsquo;addresse de l&rsquo;artisan','required' => 'required']) !!}
                            </div>
                        </div>
                   
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('face', 'facebook :') !!}
                                {!! Form::text('bface',$edartisan->face, ['class' => 'form-control', 'placeholder' => 'www.facebook.com/','required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('twitt', 'twitter :') !!}
                                {!! Form::text('btwitt',$edartisan->twitt, ['class' => 'form-control', 'placeholder' => 'www.twitter.com/','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            
                            <div class="form-group">
                                {!! Form::label('email', 'E-mail :') !!}
                                {!! Form::text('bemail',$edartisan->email, ['class' => 'form-control', 'placeholder' => 'addressemail@gmail.com','required' => 'required']) !!}
                            </div>
                        </div>
                        
                    </div>
                        
                        

                   
                    
                    <div class="row">
                         <div class="col-md-4">
                         </div>
                         <div class="col-md-4">
                         <div class="form-group">{!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}</div></div>
                         <div class="col-md-4">                      
                            </div>
                    </div>

                </div> <!-- /.box-body -->

            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
</section> <!-- /.content -->



@stop