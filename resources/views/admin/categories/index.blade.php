@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')
    <div  class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm" href="{{route('admin.categories.create')}}">Agregar Categoria</a>
        </div>
        <div class="card-body"> 
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px" >
                                <a class="btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">editar</a>
                            </td>
                            <td width="10px" >
                               <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                            @csrf 
                               @method('delete')

                               <button type="submit" class="btn btn-danger btn-sm" >Eliminar</button>
                               </form> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop



@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop