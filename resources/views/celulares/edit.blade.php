@extends('adminlte::page')

@section('title', 'CRUD CELULARES UDC')

@section('content_header')
    <h1>EDITAR CELULAR</h1>
@stop

@section('content')
    
<form action="/celulares/{{ $celulares->id }}" method="POST">

  @csrf
  @method('PUT')


<div class="mb-3">
  <label for="" class="form-label">CODIGO</label>
  <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $celulares->codigo }}">    
</div>



<div class="mb-3">
  <label for="" class="form-label">MARCA</label>
  <input id="marca" name="marca" type="text" class="form-control"  value="{{ $celulares->marca }}">
</div>



<div class="mb-3">
  <label for="" class="form-label">IMEI</label>
  <input id="imei" name="imei" type="text" class="form-control"  value="{{ $celulares->imei }}">
</div>



<div class="mb-3">
  <label for="" class="form-label">MODELO</label>
  <input id="modelo" name="modelo" type="text" step="any" value="" class="form-control"  value="{{ $celulares->modelo }}">
</div>



<a href="/celulares" class="btn btn-secondary" tabindex="5">Cancelar</a>


<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop