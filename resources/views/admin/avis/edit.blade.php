@extends('adminlte::page')

@section('title')
@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card">
                        
                    <div class="card-header"><h1>Modifier client N° {{ $client->id }}</h1>
                            <ol class="breadcrumb">
                            <li><a href="http://127.0.0.1:8000/home"><i class="fa fa-dashboard"></i> Acceuil</a></li>
                            </ol>
                        </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/client') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/client/' . $client->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.client.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
