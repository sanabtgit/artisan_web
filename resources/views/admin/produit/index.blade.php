@extends('adminlte::page')

@section('title')



@section('content')


<div>
    <div class="box-header">
    <h1 >Liste des Produits </h1>
    <ol class="breadcrumb">
                            <li><a href="../home"><i class="fas fa-fw fa-home"></i> Acceuil</a></li>
                            <li><a href="produit/create" class="active">Créer un produit</a></li>
                            
        </ol>
        <div class="box-tools pull-left">
            <a href="produit/create" class="btn btn-success "><i class="fa fa-plus btn-xs"></i>Ajouter</a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Catégorie</th>
                    <th>Artisan</th>
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tproduits as $produit)
                <tr>
                   
                    <td>{{$produit->nom}}</td>
                    <td>{{$produit->description}}</td>
                    <td>{{$produit->image}}</td>
                    <td>{{$produit->categorie_id}}</td>
                    <td>{{$produit->artisan_id}}</td>
                    <td>
                        <a href="produit/{{$produit->id}}/edit" class="btn btn-warning btn-xs">
                        <i class="fas fa-fw fa-edit"></i>Modifier
                        </a>
                        {!! Form::open(['action' => ['Admin\produitController@destroy',
                        $produit->id],'method'=>'DELETE']) !!}
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










