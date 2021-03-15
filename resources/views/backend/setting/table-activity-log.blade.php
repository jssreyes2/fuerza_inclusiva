@extends('backend.layouts.master')@section('content')    @include('backend.layouts.modal-delete')    <div class="content-wrapper">        <!-- Content Header (Page header) -->        <div class="content-header">            <div class="container-fluid">                <div class="row mb-2">                    <div class="col-sm-6">                        <h1 class="m-0 text-dark">Dashboard</h1>                    </div><!-- /.col -->                    <div class="col-sm-6">                        <ol class="breadcrumb float-sm-right">                            <li class="breadcrumb-item"><a href="{{route('backend')}}">Inicio</a></li>                            <li class="breadcrumb-item active">Actividades Operador</li>                        </ol>                    </div><!-- /.col -->                </div><!-- /.row -->            </div><!-- /.container-fluid -->        </div>        <!-- /.content-header -->        <!-- Main content -->        <section class="content">            <div class="container-fluid">                <div class="row">                    <div class="col-12">                        <div class="card card-secondary">                            <div class="card-header">                                <h3 class="card-title">Buscador</h3>                            </div>                            <form role="form" action="{{ route('activity_log') }}" method="GET">                                <div class="card-body">                                    <div class="row">                                        <div class="col-sm-4">                                            <div class="form-group">                                                <label>Operadores</label>                                                <select class='form-control required tdtextarea' id='user_id' name='filter[user_id]'>                                                    <option value=''>                                                        TODOS                                                    </option>                                                    @foreach($dataOperador as $items)                                                        <option value='{{$items->id }}'                                                                {{(isset($arrayFilter['user_id']) and $arrayFilter['user_id']==$items->id) ?'selected' : ''}}>                                                            {{$items->firstname.' ' .$items->lastname}}                                                        </option>                                                    @endforeach                                                </select>                                            </div>                                        </div>                                        <div class="col-sm-4">                                            <div class="form-group">                                                <label for="description">Descripci&oacute;n</label>                                                <select class='form-control required tdtextarea' id='description' name='filter[description]'>                                                    <option value=''>                                                        TODOS                                                    </option>                                                    <option value='save' {{(isset($arrayFilter['description']) and $arrayFilter['description']=='save') ?'selected' : ''}}>                                                        NUEVO                                                    </option>                                                    <option value='update' {{(isset($arrayFilter['description']) and $arrayFilter['description']=='update') ?'selected' : ''}}>                                                        EDITAR                                                    </option>                                                    <option value='delete' {{(isset($arrayFilter['description']) and $arrayFilter['description']=='delete') ?'selected' : ''}}>                                                        ELIMINAR                                                    </option>                                                </select>                                            </div>                                        </div>                                        <div class="col-sm-4">                                            <div class="form-group">                                                <label for="star">Fecha</label>                                                <input type="text" class="form-control fecha" id="created_at" name="filter[created_at]"                                                       value='{{isset($arrayFilter['created_at']) ? $arrayFilter['created_at'] : ''}}' readonly="readonly">                                            </div>                                        </div>                                    </div>                                </div>                                <div class="card-footer">                                    <button type="submit" class="btn btn-info">Buscar</button>                                    <a href="{{route('activity_log')}}" class="btn btn-secondary">Cancelar</a>                                </div>                            </form>                        </div>                    </div>                </div>                <div class="row">                    <div class="col-12">                        <div class="card">                            <div class="card-header">                                <h3 class="card-title">Lista de registros</h3>                            </div>                            <!-- /.card-header -->                            <div class="card-body table-responsive p-0">                                <table class="table table-hover text-nowrap">                                    <thead>                                    <tr>                                        <th class='th_list_table'>Opciones</th>                                        <th>Operador</th>                                        <th>Descripci&oacute;n</th>                                        <th class="text-center">Id registro</th>                                        <th class="text-center">Modelo</th>                                        <th class="text-center">Creado</th>                                    </tr>                                    </thead>                                    <tbody>                                    @if(count($dataActivity)>0)                                        @foreach($dataActivity AS $items)                                            <tr>                                                <td>                                                    <div class="btn-group">                                                        <button type="button" class="btn btn-secondary btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">                                                            <span class="sr-only">Toggle Dropdown</span>                                                            <div class="dropdown-menu" role="menu" id="{{$items->id}}">                                                                <a class="dropdown-item view_properties" data-id="{{$items->id}}" id="BotonVerDet{{$items->id}}">                                                                    <i class="fa fa-search-plus" id="IconoVerDet{{$items->id}}"></i> Propiedades                                                                </a>                                                            </div>                                                        </button>                                                    </div>                                                </td>                                                <td>{{$items->firstname }} {{$items->lastname }}</td>                                                <td>{{$items->description }}</td>                                                <td class="text-center">{{$items->subject_id }}</td>                                                <td>{{$items->subject_type }}</td>                                                <td class="text-center">{{date('d/m/Y',strtotime($items->created_at))}}</td>                                            </tr>                                            @if($items->properties!='[]')                                                <tr style="display: none; background-color: #F5F5F5" id="Trboton{{$items->id}}">                                                    <td colspan="10">                                                        <h3>Propiedades</h3>                                                        {{$items->properties}}                                                    </td>                                                </tr>                                            @endif                                        @endforeach()                                    @else                                        <tr>                                            <td colspan="7">                                                @foreach ($errors->all() as $error)                                                    <div class="alert alert-info alert-dismissible">                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                                                        <p><i class="icon fas fa-info"></i> {{ $error }}</p>                                                    </div>                                                @endforeach                                            </td>                                        </tr>                                    @endif                                    </tbody>                                </table>                                <div class="col-12">                                    {{ $dataActivity->links() }}                                </div>                            </div>                            <!-- /.card-body -->                        </div>                        <!-- /.card -->                    </div>                </div>                <!-- /.row -->            </div><!-- /.container-fluid -->        </section>        <!-- /.content -->    </div>    @include('backend.functions.functions_activity_log')@endsection