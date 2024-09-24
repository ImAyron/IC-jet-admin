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

<div class="row">
  <div class="col"></div>

  <div class="col">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-auto">

          <a href="http://192.168.4.1:8000/leitura/lost" class="btn btn-warning" data-toggle="tooltip" data-html="true"
            data-placement="top" title="Tags que não foram lidas nos ultimas dias ">
            Tags Perdidas 30 dias
          </a>
        </div>
      </div>
    </div>
    <p class="text-center fw-bold text-info">Tags Cadastradas {{$count}}</p>
    <p class="text-center fw-bold text-danger">Total de tags {{$tagsLidas2}}</p>

    <select onchange="location.href=this.value" class="form-select form-select-lg mb-3" name="" id="">
      <option selected style="color: #17A2B8;">Tags do Sistema</option>

      @foreach($tags as $t)

      @if(isset($tagName[$t->id]))
      <option class="option" value="{{ route('leitura.show', $tagName[$t->id]) }}">
      {{ $t->codigo }} - {{ $t->item->descricao }}
      </option>
    @endif
    @endforeach
    </select>
    <form action="{{ route('route_post.php') }}">
      @csrf

      <label for="data" class="form-label">Data de Inicio:</label>
      <input class="form-control form-control-sm" type="date" id="data" name="data">
      <input class="form-control form-control-sm" type="time" name="time" id="time">

      <p></p>

      <label for="data" class="form-label">Data de Fim:</label>
      <input class="form-control form-control-sm" type="date" id="data" name="data">
      <input class="form-control form-control-sm" type="time" name="time" id="time">

      <button class="btn btn-primary mt-2 mb-2 float-right" type="submit">Enviar</button>
    </form>
  </div>

  <div class="col"></div>
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

        <td>
        <a class="text-info" href="{{ route('tag.show', $o->EPC) }}">{{$o->EPC}}</a>
        </td>
        <td> {{date('d/m/Y  H:i:s', strtotime($o->Data))  }}</td>
        <td>{{ $o->company_id }} </td>

        @php
        $badgeClass = $o->tipo == 'Entrada' ? 'bg-success' : 'bg-danger';
    @endphp
        <td data-toggle="tooltip"  data-placement="top" title="Esse tipo de leitura so funciona para O CTI ">

        <span  
             class="badge {{ $badgeClass }}" >{{ (($o->tipo == "Entrada") ? $o->tipo : 'Saída') }}</span>
        </td>
      </tr>
  @endforeach
  </tbody>
</table>

@stop

@section('css')

<style>
 .tooltip.top .tooltip-inner {
    background-color:red;
}
.tooltip.top .tooltip-arrow {
      border-top-color: red;
}

  .form-select {
    color: white;
    background-color: #17A2B8;
    border-color: #17A2B8bb;
    border-radius: 0.25rem;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
  }

  .form-select:hover {
    color: white;
    background-color: #68c1cf;
    border-color: #68c1cf;
    cursor: pointer;
  }

  select:hover {
    background-color: white;
  }

  .option {
    color: #17A2B8;
    background-color: #fff;
  }

  #example1_wrapper .dt-buttons button {

    background-color: #17A2B8;
    /* Substitua pela cor desejada */
    color: #fff;
    /* Cor do texto nos botões */
  }

  /* Altera a cor de fundo dos botões quando hover (passa o mouse sobre) */
  #example1_wrapper .dt-buttons button:hover {
    background-color: #0b6977;
    /* Substitua pela cor desejada */
    color: #fff;
    /* Cor do texto nos botões ao passar o mouse sobre eles */
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
  $(document).ready(function () {
    $("#example1").DataTable({

      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
@stop