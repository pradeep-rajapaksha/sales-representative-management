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
                    <a href="{{ route('sales-team.edit', $representative->id) }}" class="btn btn-secondary float-right mr-2">Edit</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <table class="table table-striped">
                                <tbody>
                                    @if(!empty($representative))
                                        <tr>
                                            <th>#</th>
                                            <td>{{ $representative->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $representative->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $representative->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Telephone</th>
                                            <td>{{ $representative->telephone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $representative->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Current Route</th>
                                            <td>{{ ($representative->current_route) ? $representative->current_route->name : '' }}</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>
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
        </div>
    </div>
    <script type="text/javascript">
    </script>
@stop
