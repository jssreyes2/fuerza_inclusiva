@extends('backend.layouts.master')@section('content')    @include('backend.layouts.modal-delete')    <div class="content-wrapper">        <!-- Content Header (Page header) -->        <div class="content-header">            <div class="container-fluid">                <div class="row mb-2">                    <div class="col-sm-6">                        <h1 class="m-0 text-dark">Dashboard</h1>                    </div><!-- /.col -->                    <div class="col-sm-6">                        <ol class="breadcrumb float-sm-right">                            <li class="breadcrumb-item"><a href="{{route('backend')}}">Inicio</a></li>                            <li class="breadcrumb-item active">Men&uacute;</li>                        </ol>                    </div><!-- /.col -->                </div><!-- /.row -->            </div><!-- /.container-fluid -->        </div>        <!-- /.content-header -->        <!-- Main content -->        <section class="content">            <div class="container-fluid">                <div class="row">                    <div class="col-12">                        <div class="card">                            <div class="card-header">                                <h3 class="card-title">Lista de registros</h3>                                <div class="card-tools">                                    <a href="{{route('create_menu')}}" class="btn btn-success">Nuevo</a>                                </div>                            </div>                            <!-- /.card-header -->                            <div class="card-body table-responsive p-0" id="dataMenu">                            </div>                            <!-- /.card-body -->                        </div>                        <!-- /.card -->                    </div>                </div>                <!-- /.row -->            </div><!-- /.container-fluid -->        </section>        <!-- /.content -->    </div>    <script type='text/javascript'>        $(document).ready(function () {            var url = "{{ route('menuDetails') }}";            $('#dataMenu').load(url);        });    </script>@endsection