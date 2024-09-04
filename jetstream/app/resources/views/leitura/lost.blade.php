@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@stop

@section('content')
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

<div>
    <h3>Tags (EPC) não lidas nos últimos 30 dias</h3>
    <table id="tagsTable" class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Tag (EPC)</th>
                <th>Última Leitura</th>
                <th>Local</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tagsNaoLidas as $tag => $info)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <a class="text-info" href="{{ route('tag.show', $tag) }}">{{$tag}}</a>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($info['data'])->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $info['company_id'] }}</td> <!-- Exibe o company_id -->
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')

@stop

@section('js')

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- DataTables & Plugins -->
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="./plugins/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/jszip/jszip.min.js"></script>

<script>
    $(function() {
        $("#tagsTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#tagsTable_wrapper .col-md-6:eq(0)');
    });
</script>
@stop
