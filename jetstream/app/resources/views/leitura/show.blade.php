@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@stop


@section('content')

<!-- Reload Página-->
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="./dist/css/adminlte.min.css">


<div class="d-flex justify-content-between mb-2">
    <a href="{{ route('leitura.index') }}" type="button" class="btn btn-outline-primary">Voltar</a>
    <p>
        Última atualização: <strong>{{ $ultimaLeitura->date  }}</strong> <br>
        Detectada em: <strong>{{ $ultimaLeitura->company_id }}</strong>
    </p>
    <h3>
        {{ $ultimaLeitura->item->descricao . ' - ' . $ultimaLeitura->item->codigo }}
    </h3>
</div>


<table id="example1" class="table table-bordered table-striped table-responsive-sm">
  <caption>Ultimas leituras</caption>
  <thead>

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tag</th>
      <th scope="col">Data</th>
      <th scope="col">Antena</th>
      <th scope="col">Tipo</th>



    </tr>
  </thead>
  <tbody>

    @foreach($leituras as $o)
    <tr>

      <td>{{ $o->id}}</td>
      {{-- <td><a href="{{App\Http\Controllers\LeituraController::ExibirTag($o->EPC)}}">{{$o->EPC}}</a></td> --}}
      <td><a class="text-info" href="{{ route('tag.show', $o->EPC) }}">{{$o->EPC}}</a></td>
      <td> {{date( 'd/m/Y  H:i:s' , strtotime($o->Data))  }}</td>
      <td>{{ $o->company_id }} </td>
      <?php
      if ($o->tipo == 'Entrada') { ?>
        <td><span class="badge bg-success">{{ $o->tipo }}</span> </td>
      <?php  } else { ?>


        <td><span class="badge bg-danger">{{ $o->tipo }}</span> </td>
      <?php  } ?>
    </tr>
    @endforeach
  </tbody>
</table>





@stop

@section('css')

@stop

@section('js')
<script>
  function mostrarTabela(num) {

    document.getElementById('example' + num).style.display = '';
  }
</script>
<!-- jQuery -->
<script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="./plugins/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/jszip/jszip.min.js"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function() {
    $("#example1").DataTable({

      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example1').DataTable({

      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop

