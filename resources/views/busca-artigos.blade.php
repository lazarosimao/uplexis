@extends('layouts.app')

@section('content')
<!-- Main content -->
<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto
}
</style>
<section class="content">
    <br><br>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <img src="http://blog.uplexis.com.br/wp-content/uploads/2017/10/logo-uplexis-horizontal-blog.png" height="100" alt="uplexis">
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <form method="post" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar Artigos...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search" class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</section>
@endsection

@section('javascript')
<script>
    removeMarcacaoMenuAtivo();
    addMarcacaoMenuAtivo('#menuArtigos');

    $('#search').click( function (e) {
        e.preventDefault();
        var q = $('#buscar').val();

        if(q.length > 0){
            $.ajax({
                'processing': true,
                'serverSide': true,
                type: 'get',
                data: {busca: q},
                url: '{{ route("buscarartigos") }}',
                dataType: 'json',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success: function (e)
                {
                    if(e == 1){
                        Swal.fire({
                            title: '',
                            text: "Artigos encontrados com sucesso, veja na listagem de artigos.",
                            type: 'success',
                            showCancelButton: false,
                            confirmButtonText: 'OK'
                            }).then((result) => {
                                window.location = '{{ route('artigos') }}'
                        })
                    }else{
                        Swal.fire('Atenção', 'Não foi encontrado nenhum artigo com a palavra pesquisada', 'warning');
                    }
                }
            });
        }
    });
</script>
@endsection
