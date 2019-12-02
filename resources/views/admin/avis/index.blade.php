@extends('adminlte::page')

@section('title')



@section('content')


<div>
    <div class="box-header">
    <h1 >Liste des avis </h1>
    
    

        <div class="box-tools pull-left">
            <a href="avis/create" class="btn btn-success"><i class="fa fa-plus btn-xs"></i>Ajouter</a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Produit</th>
                    <th>Client</th>
                   
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tavis as $avis)
                <tr>
                   
                    <td>{{$avis->nombre}}</td>
                    <td></td>
                   
                 
                    <td></td>
                   
                    <td>
                        <a href="avis/{{$avis->id}}/edit" class="btn btn-warning btn-xs">
                        <i class="fas fa-fw fa-edit"></i>Modifier
                        </a>
                        {!! Form::open(['action' => ['Admin\avisController@destroy',
                        $avis->id],'method'=>'DELETE']) !!}
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










