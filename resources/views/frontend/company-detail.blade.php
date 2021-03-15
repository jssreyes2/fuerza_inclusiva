@extends('frontend.layouts.master')
@section('content')

    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Detalle de la empresa</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li>
                                <a href="{{route('jobs')}}" class="text-uppercase font-weight-bold">Inicio</a>
                            </li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Páginas</span>
                            </li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Detalle de la empresa</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-sm-center">
                        <img src="{{ asset('asset/frontend/images/featured-job/img-1.png')}}" alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">Código de temas Pvt.Ltd </a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>4102 Aviation Way Los Angeles, CA 90017</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0"><i class="mdi mdi-bookmark-check mdi-18px mr-2"></i>Verified</p>
                            </li>
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>Themescodeltd.co.in</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>Themescodeltd2018@gmail.com</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>123 456 7890</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="border-top border-bottom pt-4 pb-4">
                        <div class="row justify-content-sm-center">
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Empleador </h5>
                                    <p class="text-muted mb-0">5540 +</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Escribe</h5>
                                    <p class="text-muted mb-0">Crear sitio web </p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Experiencia</h5>
                                    <p class="text-muted mb-0">4 Years + Exp.</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Salario</h5>
                                    <p class="text-muted mb-0">$700 - $2000/month</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Seguidores</h5>
                                    <p class="text-muted mb-0">584230 +</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Resumen de la empresa: </h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">Nosotros somos una agencia de marketing digital en Centroamérica que asesora y genera valor a sus clientes según
                            sus necesidades, competencia y metas. Planificamos estrategias avanzadas e innovadoras fundamentadas en data para garantizar
                            resultados y retorno de inversión. Trabajamos en Centroamérica generando nuevas ideas para nuestros clientes de la mano
                            de nuestro socios: Hubspot, Google, Meltwater y Headway.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Servicios :</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">
                            Diseño Web Resposive
                        </p>
                        <p>
                            El diseño web es un aspecto muy importante ya que esta es tu carta de presentación con los clientes. Es importante que
                            transmita correctamente la imagen y los valores de su empresa tomando en cuenta el comportamiento y los hábitos del usuario
                            en internet para brindar un experiencia agradable, simple y fácil de usar.
                        </p>


                        <p class="text-muted">
                            Usabilidad
                        </p>
                        <p>
                            La usabilidad es la calidad de la experiencia del usuario al interactuar con una página web. Un sitio web debe ser cómodo
                            y rápido para el usuario. Si se diseña y desarrolla de manera coherente el cliente encontrará lo que busca de forma intuitiva y rápida.
                        </p>

                        <p class="text-muted">
                            Experiencia de Usuario
                        </p>
                        <p>
                            Para crear una experiencia de usuario satisfactoria dentro de tu página web es importante contar con un tiempo de carga rápido,
                            cumplir con los estándares, crear un trayecto flexible y eficaz, código limpio y políticas de privacidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop