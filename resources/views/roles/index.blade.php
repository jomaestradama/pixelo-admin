@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Roles de usuario</h2>
                        @can('group.create')
                        <a href="{{route('group.create')}}">Crear Rol</a>
                        @endcan
                    </div>
                    <div class="panel-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role Id</th>
                                    <th>User Id</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                 <tr>
                                     <td>{{$role->id}}</td>
                                     <td>{{$role->name}}</td>
                                     <td>{{$role->slug}}</td>
                                 </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
    </div>


@endsection