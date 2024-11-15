@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

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
<br>
 <button onclick="mostrarTabela(4)">Entrada</button>
 <table style="display: none;"id="example4" class="table table-bordered table-striped table-responsive-sm">
    <caption>Ultimas leituras</caption>
    <thead>
   
        <tr>
            <th scope="col">Tag</th>
            <th scope="col">Data</th>
         
        </tr>
    </thead>
    <tbody>

      @foreach($teste as $tes)
        <tr>
            <td>{{ $tes->operations }}</td>
            <td>{{date( 'd/m/Y' , strtotime($tes->created_at))}}</td>
            
         
        </tr>
        @endforeach
    </tbody>
</table>
<button onclick="mostrarTabela(5)">Saida</button>
 <table style="display: none;"id="example5" class="table table-bordered table-striped table-responsive-sm">
    <caption>Ultimas leituras</caption>
    <thead>
   
        <tr>
            <th scope="col">Tag</th>
            <th scope="col">Data</th>
         
        </tr>
    </thead>
    <tbody>

      @foreach($teste2 as $tes)
        <tr>
            <td>{{ $tes->operations }}</td>
            <td>{{ $tes->created_at }}</td>
            
         
        </tr>
        @endforeach
    </tbody>
</table>


<table id="example1" class="table table-bordered table-striped table-responsive-sm">
    <caption>Ultimas leituras</caption>
    <thead>
   
        <tr>
            <th scope="col">Tag</th>
            <th scope="col">Data</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Local</th>
            <th scope="col">Tipo</th>
          




        </tr>
    </thead>
    <tbody>

        @foreach($operacaos as $o)
        <tr>
            <td><a href="{{route('tag.show', $o->tag_id)}}">{{ $o->operations }}</a></td>
            <td>{{date( 'd/m/Y H:i:s' , strtotime($o->created_at))}}</td>
            <td>{{ $o->funcionario }}</td>
            <td>{{ $o->antena }}</td>
            <td>{{ $o->tipo }} </td>
         
        </tr>
        @endforeach
    </tbody>
</table>





@stop

@section('css')
<meta http-equiv='refresh' content='15'>
@stop

@section('js')
<script>
function mostrarTabela(num){
    
    document.getElementById('example'+num).style.display = '';
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
      
      "responsive": true, "lengthChange": true, "autoWidth": false,
      
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"], 
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop