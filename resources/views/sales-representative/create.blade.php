@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Salse Representatives</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('sales-team.index') }}" class="btn btn-secondary float-right">Back to List</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! Form::open(['url' => '/sales-team', 'class' => 'form-sales-representative-create', 'files' => true]) !!}
                                        @include ('sales-representative.form')
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
@stop
