@extends('adminlte::page')
<!--<link rel="stylesheet" href="../css/dataTables.min.css">-->
@section('title')



@section('content')


<div>
    <div class="box-header">
        <h1 >Liste des Artisans </h1>
        <ol class="breadcrumb">
                            <li><a href="../home"><i class="fas fa-fw fa-home"></i> Acceuil</a></li>
                            <li><a href="artisan/create" class="active">Créer un artisan</a></li>
                            
        </ol>
        <div class="box-tools pull-left">
            <a href="artisan/create" class="btn btn-success"><i class="fa fa-plus btn-xs"></i>Ajouter</a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
              
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">Nom et prénom</th>
                    <th>Photo</th>
                    
                    
                    <th>Addresse</th>
                    <th>E-mail</th>
                   <th>Délégation</th>
                   <th>face</th>
                    <th>twitter</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
          <!--  id	nom	prenom	email	address	face	twitt	created_at	updated_at	delegation_id -->
                @foreach($dbartisan as $artisan)
                <tr>
                    <td>{{$artisan->nom}} {{$artisan->prenom}}</td>
                    <td> <img src="{{asset('storage/'.$artisan->imageart)}}" height="50px" width="50px"></td>
              
                    <td>{{$artisan->address}}</td>
                    <td>{{$artisan->email}}</td>
                    <td>{{$artisan->nomdeleg}}</td>
                    <td>{{$artisan->face}}</td>
                    <td>{{$artisan->twitt}}</td>
                   
                     
                    
                    
                   
                    <td>
                        <a href="artisan/{{$artisan->id}}/edit" class="btn btn-warning btn-xs">
                            <i class="fas fa-fw fa-edit"></i>Modifier
                        </a>
                        {!! Form::open(['action' => ['Admin\artisanController@destroy',
                        $artisan->id],'method'=>'DELETE']) !!}
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
<!--<script src="../../js/dataTables.min.js"></script>
<script src="../../js/dataTables.bootstrap.min.js"></script>
<script src="../../js/scroll.js"></script>
<script src="../../js/fastclick.js"></script>
<script src="../../js/adminlte.min.js"></script>-->






