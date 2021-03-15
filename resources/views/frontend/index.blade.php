@extends('frontend.layouts.master')
@section('content')

    @include('frontend.seach-section')
    @include('frontend.popular-category-section')
    @include('frontend.jobs-section')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2"><i class="mdi mdi-bell-outline text-primary"></i> <span
                                class="badge badge-pill badge-danger">1</span></div>
                    <h5 class="mt-2 mb-0">Tu notificación</h5></div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Correo electrónico :"
                                       aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop