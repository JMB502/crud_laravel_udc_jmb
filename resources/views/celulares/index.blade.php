@extends('adminlte::page')

@section('title', 'CRUD CELULARES UDC')

@section('content_header')
    <h1>LISTADO DE CELULARES UDC</h1>
@stop

@section('content')
<a href="celulares/create" class="btn btn-primary mb-3">CREAR NUEVO CELULAR</a>

<table id="celulares"  class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class ="bg-primary text-white">

<tr>

<th scope ="col"> ID </th>
<th scope ="col"> CODIGO </th>
<th scope ="col"> MARCA </th>
<th scope ="col"> IMEI </th>
<th scope ="col"> MODELO </th>
<th scope ="col"> ACCIONES </th>

</tr>

</thead>

<tbody>

    @foreach ($celulares as $celular)
    <tr>

        <td>{{ $celular->id }}</td>
        <td>{{ $celular->codigo }}</td>
        <td>{{ $celular->marca }}</td>
        <td>{{ $celular->imei }}</td>
        <td>{{ $celular->modelo}}</td>
        <td>
            <form action="{{ route('celulares.destroy',$celular->id) }}" method="POST">



            <a href = "/celulares/{{ $celular->id }}/edit" class="btn btn-info" >EDITAR</a>

            @csrf
            @method('DELETE')
            <button type="submit" class ="btn btn-danger"> BORRAR </button>


       
        </form>
        </td>
    </tr>

   
        
    @endforeach
</tbody>
     
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src ="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src ="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>

$('#celulares').DataTable({"lengthMenu":[[5,10,50,-1],[5,10,50, "All"]]
});

</script>
@stop