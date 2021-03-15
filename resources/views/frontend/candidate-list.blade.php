@extends('frontend.layouts.master')
@section('content')

    @include('frontend.seach-candidate-list-section')

    <section class="section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">
                                Mostrando resultados: 1-6 de 540
                            </h5>
                        </div>
                        <div class="sort-button text-center float-sm-right">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mb-0 mr-3">
                                    <select class="nice-select">
                                        <option data-display="Ordenar por">Ordenar por</option>
                                        <option value="1">Web Developer</option>
                                        <option value="2">PHP Developer</option>
                                        <option value="3">Web Designer</option>
                                    </select>
                                </li>

                                <li class="list-inline-item">
                                    <select class="nice-select">
                                        <option data-display="Defecto">Defecto</option>
                                        <option value="1">Web Developer</option>
                                        <option value="2">PHP Developer</option>
                                        <option value="3">Web Designer</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark">Tipo de trabajo</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheckAll">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheckAll">Todo tipo</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck22">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck22">Persona libre de dedicación</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck23">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck23">Tiempo completo</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck3">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck3">Tiempo parcial</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all-select" id="customCheck4">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck4">Intermedio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark">Cargo</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck5">Gerente de proyecto</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck6">Diseñador web</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck7">Bancario</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck8">Digital y creativo</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck9">Contratista de IT</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck10">Dasarrollador java</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck11">Ingeniero civil</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck12">SEO</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark">Habiliadades</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck13">HTML</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck14">CSS</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck15">JavaScript</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck16">PHP</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck17">Wordpress</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck18">Photoshop</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark">Experiencia</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio1">1Año a 2Año</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio2">2Año a 3Año</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio3">3Año a 4Año</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio4">4Año a 5Año</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio5">5Año +</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefive" class="job-list" aria-expanded="true" aria-controls="collapsefive">
                                    <div class="card-header" id="headingfive">
                                        <h6 class="mb-0 text-dark">Género</h6>
                                    </div>
                                </a>
                                <div id="collapsefive" class="collapse show" aria-labelledby="headingfive">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio6">Masculino</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio7">Femenino</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio8">Otros</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                                    <div class="card-header" id="headingsix">
                                        <h6 class="mb-0 text-dark">Salario ofrecidos</h6>
                                    </div>
                                </a>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio9">$100 - $2000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio10">$2100 - $3000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio11">$3100 - $4000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio12">$4100 - $5000</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio13">$51k - $60k</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsesevan" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesevan">
                                    <div class="card-header border-bottom-0" id="headingsevan">
                                        <h6 class="mb-0 text-dark">Calificación</h6>
                                    </div>
                                </a>
                                <div id="collapsesevan" class="collapse" aria-labelledby="headingsevan">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck19">Secundaria</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck20">Licenciatura</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck21">
                                            <label class="custom-control-label ml-1 text-muted" for="customCheck21">Maestría</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="candidates-listing-item">
                        <div class="border mt-4 rounded p-3">
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="{{ asset('asset/frontend/images/clients/candidate-1.jpg')}}" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">Valeria Osorio</a></h5>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="mdi mdi-account mr-1"></i>Desarrollador web </li>
                                            <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i>Colombia.</a></li>
                                            <li class="text-muted"><i class="mdi mdi-currency-usd mr-1"></i>$700 - $900/mes</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Habilidades : HTML, CSS, JavaScript, Wordpress, PHP, jQueary.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        <div class="fav-icon">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="#" class="btn btn-primary-outline btn-sm">Ver perfil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="border mt-4 rounded p-3">
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="{{ asset('asset/frontend/images/clients/candidate-2.jpg')}}" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">Jesús Reyes</a></h5>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="mdi mdi-account mr-1"></i>Desarrollador web </li>
                                            <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i>Venezuela.</a></li>
                                            <li class="text-muted"><i class="mdi mdi-currency-usd mr-1"></i>$700 - $900/mes</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Habilidades : HTML, CSS, JavaScript, Wordpress, PHP, jQueary.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        <div class="fav-icon">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="#" class="btn btn-primary-outline btn-sm">Ver perfil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="border mt-4 rounded p-3">
                            <div class="row">

                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="{{ asset('asset/frontend/images/clients/candidate-3.jpg')}}" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">Samir Castro</a></h5>
                                        <ul class="list-unstyled">
                                            <li class="text-muted"><i class="mdi mdi-account mr-1"></i>Desarrollador web </li>
                                            <li class="text-muted"><a href="" class="text-muted"><i class="mdi mdi-map-marker mr-1"></i>Colombia.</a></li>
                                            <li class="text-muted"><i class="mdi mdi-currency-usd mr-1"></i>$700 - $900/mes</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">Habilidades : HTML, CSS, JavaScript, Wordpress, PHP, jQueary.</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        <div class="fav-icon">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="#" class="btn btn-primary-outline btn-sm">Ver perfil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination justify-content-center mb-0 mt-4 pt-2">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@stop