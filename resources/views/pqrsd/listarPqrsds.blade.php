@extends('layouts.plantilla')

@section('title','Pqrsd')

@section('content')

<div class ="container">
<table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id Pqrsd</th>
            <th>esAnomina</th>
            <th>TipoPQRSD</th>
            <th>Estado</th>
            <th>Creada</th>
            <th>Responder</th>
            <th>Detalle</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($pqrsds as $pqrsd)
          <tr>
              <td>{{$pqrsd->id}}</td>
              <td>{{$pqrsd->esAnonima}}</td>
              <td>{{$pqrsd->tipoPqrsd}}</td>
              <td>{{$pqrsd->estado}}</td>
              <td>{{$pqrsd->created_at->diffForHumans()}}</td>
              <td><a href="{{route('pqrsds.answer',$pqrsd->id)}}">responder </a></td>
              <td><a href="{{route('pqrsds.show',$pqrsd->id)}}">Detalle</a></td>
              <td><a href="{{route('pqrsds.edit',$pqrsd->id)}}">Editar</a></td>
              
          </tr>
      @endforeach
    </tbody>
    <!-- <tfoot>
        <tr>
            <th>Id Pqrsd</th>
            <th>esAnomina</th>
            <th>TipoPQRSD</th>
            <th>Estado</th>
            <th>Creada</th>
            <th>Responder</th>
            <th>Detalle</th>
        </tr>
    </tfoot> -->
</table>

</div>

@endsection

@section('js')


<script type="text/javascript">

   $(document).ready(function() {
    // $('#idPqrsd').DataTable();
  
    // Enable DataTables: https://datatables.net/examples/basic_init/
    try {
      if ($.fn.dataTable.isDataTable("#idPqrsd")) {
        $("#idPqrsd").DataTable()
      } else {
        $("#idPqrsd").DataTable({
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json",
          },
        })
      }
    } catch (error) {
      console.log(
        "Unable to add Filters to a table from this page - " + error.name
      )
    }


} );
</script>

@endsection




