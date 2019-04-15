@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    HOME
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>

    <!-- Main content -->
    <section class="content">
        <p>Você deverá desenvolver uma aplicação que utilize PHP 7 e Framework Laravel 5. A aplicação deve ser capaz de realizar uma requisição ao Blog da upLexis (http://www.uplexis.com.br/blog) e capturar artigos de acordo com a pesquisa realizada.
Os dados devem ser salvos em um banco de dados MySQL.</p>
    </section>
    <!-- /.content -->
@endsection
