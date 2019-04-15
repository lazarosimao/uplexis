@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    Artigos
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>

    <!-- Main content -->
    <section class="content">
        <a href="{{ route('buscar') }}" id="buscar_artigos" class="btn btn-danger">Buscar novos artigos</a>
        <br><br>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">USUARIO</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TITULO</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">LINK</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">DATA CRIACAO</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($artigos as $a)
                        <tr role="row" class="odd">
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->usuario->usuario }}</td>
                            <td>{{ $a->titulo }}</td>
                            <td><a href="{{ $a->link }}">Veja +</a></td>
                            <td>{{ $a->created_at }}</td>
                        </tr>
                    @endforeach
            </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->

@endsection

@section('javascript')
<script>
    removeMarcacaoMenuAtivo();
    addMarcacaoMenuAtivo('#menuArtigos');


    $(function () {
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : false,
        'info'        : true,
        'autoWidth'   : false
        })
    })

</script>
@endsection
