@extends('frontend.layouts.master')
@section('content')

    <style>
        #s2id_country_id{
            width: 260px!important;
        }
    </style>

    <!-- Start home -->
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">LISTA DE TRABAJOS</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Inicio</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Trabajos</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Lista de trabajos</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->



    <div class="container">
        <div class="home-form-position">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="home-registration-form job-list-reg-form bg-light shadow p-4 mb-3">
                        <form class="registration-form">
                            <div class="row">

                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <input type="text" id="search" name="filter[search]" class="form-control" placeholder="Titulo...">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="registration-form-box">
                                        <select id="country_id" name="filter[country_id]" class="select-multiple">
                                            <option value="">País</option>
                                            @foreach($countries AS $country)
                                                <option value="{{$country['id']}}"
                                                        {{((isset($filterJobs) and $filterJobs['country_id']==$country['id']) ? 'selected' : '')}}>
                                                    {{ucfirst(mb_strtolower($country['name']))}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <select id="category_id" name="filter[category_id]" class="select-multiple">
                                            <option value="">Categories...</option>
                                            @foreach($categories AS $category)
                                                <option value="{{$category->id}}"
                                                        {{isset($filterJobs) and $filterJobs['category_id']==$category->id ? 'selected' : ''}} >
                                                    {{$category->category_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="registration-form-box">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Buscar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="section pt-0" sty>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Encuentra trabajo</h4>
                        <p class="text-muted para-desc mx-auto mb-1"> Cuentanos sobre tu proyecto, y te ayudaremos a encontrar prospecto.</p>
                    </div>
                </div>
            </div>


            @if(count($jobs) == 0)
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="section-title text-center mb-4 pb-2">

                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning" role="alert">{{ $error }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

            @else

                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-sidebar">
                            <div class="accordion" id="accordionExample">
                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-header" id="headingOne">
                                            <h6 class="mb-0 text-dark f-18">Date Posted</h6>
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body p-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio1">Last Hour</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio2">Last 24 hours</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio3">Last 7 days</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio4">Last 14 days</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio5">Last 30 days</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse one end -->
                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                        <div class="card-header" id="headingtwo">
                                            <h6 class="mb-0 text-dark f-18">Categories</h6>
                                        </div>
                                    </a>
                                    <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                        <div class="card-body p-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio7">Digital & Creative</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio8">Accountancy</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio9">Banking</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio10">IT Contractor</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio11" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio11">Graduate</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio12" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio12">Estate Agency</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse one end -->
                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                        <div class="card-header" id="headingthree">
                                            <h6 class="mb-0 text-dark f-18">Experince</h6>
                                        </div>
                                    </a>
                                    <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                        <div class="card-body p-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio13">1Year to 2Year</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio14">2Year to 3Year</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio15">3Year to 4Year</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio16" name="customRadio2" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio16">IT Contractor</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse one end -->
                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                        <div class="card-header" id="headingfour">
                                            <h6 class="mb-0 text-dark f-18">Gender</h6>
                                        </div>
                                    </a>
                                    <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                        <div class="card-body p-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio17" name="customRadio3" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio17">Male</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio18" name="customRadio3" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio18">Female</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio19" name="customRadio3" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="customRadio19">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse one end -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 mt-4 pt-2">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="show-results">
                                    <div class="float-left">
                                        <h5 class="text-dark mb-0 pt-2 f-18">Showing results 0-20</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($jobs AS $job)
                                <div class="col-lg-12 mt-4 pt-2">
                                    <div class="job-list-box border rounded">
                                        <div class="p-3">
                                            <div class="row align-items-center">

                                                <div class="col-lg-2">
                                                    <div class="company-logo-img">

                                                        @if($job->company_logo)
                                                            <img src="{{ asset('storage/company/' .$job->company_logo)}}" alt="{{$job->company_slug}}"
                                                                 class="img-fluid mx-auto d-block" style="border-radius: 90px; width: 150px;">

                                                        @else
                                                            <img src="https://via.placeholder.com/300X300//88929f/5a6270C/O https://placeholder.com/"
                                                                 height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-lg-7 col-md-9">
                                                    <div class="job-list-desc">
                                                        <h6 class="mb-2">
                                                            <a href="#" class="text-dark">{{$job->job_title}}</a>
                                                        </h6>

                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item mr-3">
                                                                <p class="text-muted mb-0">
                                                                    @if($job['gender']==\App\Models\Job::GENDER_M)
                                                                        <i class="mdi mdi-gender-male mr-2"></i>
                                                                    @endif

                                                                    @if($job['gender']==\App\Models\Job::GENDER_F)
                                                                        <i class="mdi mdi-gender-female mr-2"></i>
                                                                    @endif

                                                                    @if($job['gender']==\App\Models\Job::GENDER_O)
                                                                        <i class="mdi mdi-human-male-female mr-2"></i>
                                                                    @endif

                                                                    {{ucfirst(mb_strtolower($job['gender']))}}
                                                                </p>
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-bulletin-board mr-2"></i>
                                                                    {{ucfirst(mb_strtolower($job['category_name']))}}
                                                                </p>
                                                            </li>
                                                        </ul>


                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item mr-3">
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-cash-usd mr-2"></i> {{$job->minimum_salary .' - '.$job->maximum_salary}}
                                                                </p>
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-home-map-marker text-primary mr-2"></i> {{$job['name']}}
                                                                </p>
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-school mr-2"></i>
                                                                    {{ucfirst(mb_strtolower($job['education_name']))}}
                                                                </p>
                                                            </li>
                                                        </ul>

                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item mr-3">
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-timer mr-2"></i>
                                                                    {{ucfirst(mb_strtolower($job['job_time']))}} {{ucfirst(mb_strtolower($job['schedule']))}}
                                                                </p>
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <p class="text-muted mb-0">
                                                                    <i class="mdi mdi-calendar mr-2"></i> Experiencia:
                                                                    {{ucfirst(mb_strtolower($job['year_of_experience']))}}
                                                                </p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>


                                                <div class="col-lg-3 col-md-3">
                                                    <div class="job-list-button-sm text-right">
                                                        <span class="badge badge-success">
                                                             <i class="mdi mdi-calendar mr-2"></i>
                                                        {{date('d/m/Y', strtotime($job['created_at']))}}
                                                        </span>

                                                        <div class="mt-3">
                                                            <a href="#" class="btn btn-sm btn-primary">Postularme</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination job-pagination mb-0 justify-content-center">
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
            @endif
        </div>
    </section>
    <script type="application/javascript">
        $(document).ready(function () {
            $('.select-multiple').select2();
        });
    </script>
@stop