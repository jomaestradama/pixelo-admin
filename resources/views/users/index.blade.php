@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Usuarios</h2>
                        @can('group.create')
                        <a href="{{route('group.create')}}">Crear Grupo</a>
                        @endcan
                    </div>
                    <div class="panel-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                 <tr>
                                     <td>{{$user->id}}</td>
                                     <td>{{$user->name}}</td>
                                     <td>{{$user->email}}</td>
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