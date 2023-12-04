@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@stop


@section('content')
<!-- Data Table para portugues-->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.11.6/i18n/Portuguese.json"></script>


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

<div class="row">
  <div class="col">

  </div>
  <div class="col">

    <p style="color:blue;text-align:center;">Tags Cadastradas {{$count}}</p>
    <p style="color:Red;text-align:center;">Total de tags {{$tagsLidas2}}</p>
    <select onchange="location.href=this.value" class="form-select form-select-lg mb-3" name="" id="">
      <option selected style="color: #17A2B8;">Tags do Sistema</option>


      @foreach($tags as $t){

      <option class="option" value="{{route('leitura.show',$tagName[$t->id][0]->id)}}">{{$t->codigo}} - {{$t->item->descricao}}</option>

      }

      @endforeach
    </select>
    <form action="{{ route('route_post.php') }}">
      @csrf

      <label for="data">Data de Inicio:</label>
      <input type="date" id="data" name="data">
      <input type="time" name="time" id="time">

      <p></p>
      <label for="data">Data de Fim:</label>
      <input type="date" id="data2" name="data2">
      <input type="time" name="time1" id="time1">


      <button type="submit">Enviar</button>
    </form>
  </div>
  <div class="col">

  </div>


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



<meta http-equiv='refresh' content='80'>
<style>
  select:hover {
    background-color: white;
  }

  .option {
    color: white;
    background-color: #17A2B8;
  }

  
#example1_wrapper .dt-buttons button {
  
  background-color: #17A2B8; /* Substitua pela cor desejada */
  color: #fff; /* Cor do texto nos botões */
}

/* Altera a cor de fundo dos botões quando hover (passa o mouse sobre) */
#example1_wrapper .dt-buttons button:hover {
  background-color: #0b6977; /* Substitua pela cor desejada */
  color: #fff; /* Cor do texto nos botões ao passar o mouse sobre eles */
}


  
</style>
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
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.11.6/i18n/Portuguese.json"
    },

      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
@stop