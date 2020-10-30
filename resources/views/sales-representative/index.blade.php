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
                    <a href="{{ route('sales-team.create') }}" class="btn btn-info float-right">Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Current Route</th>
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @if(count($team) > 0)
                                @foreach($team as $key => $representative)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $representative->name }}</td>
                                        <td>{{ $representative->email }}</td>
                                        <td>{{ $representative->telephone }}</td>
                                        <td>{{$representative->current_route}}</td>
                                        <td>{{ $representative->status }}</td>
                                        <td>
                                            <a href="{{ route('sales-team.show', $representative->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('sales-team.edit', $representative->id) }}" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('sales-team.delete', $representative->id) }}" class="btn btn-sm btn-danger" onclick="window.delete()"><i class="fas fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">
                                        <p class="mb-0">No data found!</p>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.delete = function(id=null) { 
            if (confirm("Confirm delete?") && id!==null)
                return true;
                // window.location.href  = "admin/sales-team/"+id+"/delete";
            return false;
        }
    </script>
@stop
