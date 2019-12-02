@extends('adminlte::page')

@section('title')



@section('content')


<div>
    <div class="box-header">
        <h1 >Liste des Clients </h1>
        <ol class="breadcrumb">
                            <li><a href="../home"><i class="fas fa-fw fa-home"></i> Acceuil</a></li>
                            <li><a href="client/create" class="active">Créer un client</a></li>
                            
        </ol>
        <div class="box-tools pull-left">
            <a href="client/create" class="btn btn-success"><i class="fa fa-plus btn-xs"></i>Ajouter</a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
              
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Mot de passe</th>
                    <th>N° téléphone</th>
                    <th>Addresse</th>
                    <th>E-mail</th>
                   
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tclient as $client)
                <tr>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->login}}</td>
                    <td>{{$client->passwd}}</td>
                    <td>{{$client->tel}}</td>
                   <td>{{$client->address}}</td>
                     <td>{{$client->email}}</td>
                    
                    
                   
                    <td>
                        <a href="client/{{$client->id}}/edit" class="btn btn-warning btn-xs">
                            <i class="fas fa-fw fa-edit"></i>Modifier
                        </a>
                        {!! Form::open(['action' => ['Admin\clientController@destroy',
                        $client->id],'method'=>'DELETE']) !!}
                        <a onclick="return confirm('Etes vous sûr(e) de vouloir supprimer ce client ?')">
                            {{ Form::button('<i class="fas fa-fw fa-minus"></i>Supprimer',
                                ['type' => 'submit', 'class' => 'btn btn-danger btn-xs'] )  }}
                            
                        </a>
                        {!! Form::close() !!}
                      
                        


                    </td>
                </tr>
                @endforeach
                <tr>
                  
                </tr>

            </tbody>
            
        </table>
    </div>
    <!-- /.box-body -->
</div>
@stop










