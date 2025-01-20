@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Creacion de Categoria</h1>
@stop

@section('content')
     <div class="card">
        <div class="cardbody">
        <form method="POST" action="{{route('admin.categories.store')}}">
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_token" id="_token" value="csrf_token_will_be_here">
                    <input type="email" name="email" id="email" placeholder="Your e-mail address">
            </form>
        </div>
     </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop