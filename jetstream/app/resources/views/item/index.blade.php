@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')


@stop


@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Itens cadastrados</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped table-responsive-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Código</th>
          <th scope="col">Descrição</th>
          <th scope="col">Data de fabricação</th>
          <th style="width: 40px">Situação</th>
       

        </tr>
      </thead>
      <tbody>
        @foreach($items as $i)
        <tr>
          <td>{{ $i->id}}</a></td>
          <td><a style="color:red;" href="{{route('item.show', $i->id)}}"><b>{{ $i->codigo }}</b></a></td>
          <td>{{ $i->descricao }} </td>
          <td>  {{date( 'd/m/Y' , strtotime($i->dataFab))}} </td>
          <?php $aleatorio = rand(1, 100);
          if ($aleatorio >= 50) {
          ?>

            <td><span class="badge bg-success">Ativo</span></td>
          <?php }; ?>
          <?php
          if ($aleatorio < 50) {
          ?>

            <td><span class="badge bg-danger">inativo</span></td>
          <?php }; ?>

         

        </tr>
        @endforeach
      </tbody>

    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@stop

@section('css')
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
@stop

@section('js')

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
      "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": truee,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

@stop