@extends('adminlte::page')

@section('title')



@section('content')


<div>
    <div class="box-header">
    <h1 >Liste des Catégories </h1>
    <ol class="breadcrumb">
                            <li><a href="../home"><i class="fas fa-fw fa-home"></i> Acceuil</a></li>
                            <li><a href="categorie_produit/create" class="active">Créer une catégorie</a></li>
                            
        </ol>
        <div class="box-tools pull-left">
            <a href="categorie_produit/create" class="btn btn-success"><i class="fa fa-plus btn-xs"></i>Ajouter</a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                  
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tcategories as $categorie)
                <tr>
                   
                    <td>{{$categorie->nom}}</td>
                    <td>{{$categorie->description}}</td>
                 
                    
                    <td>
                        <a href="categorie_produit/{{$categorie->id}}/edit" class="btn btn-warning btn-xs">
                        <i class="fas fa-fw fa-edit"></i>Modifier
                        </a>
                        {!! Form::open(['action' => ['Admin\categorieController@destroy',
                        $categorie->id],'method'=>'DELETE']) !!}
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










