@extends('frontend.layouts.master')
@section('content')

    <style>
        #s2id_country_id {
            width: 260px !important;
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
                            <li><a href="{{route('jobs')}}" class="text-uppercase font-weight-bold">Inicio</a></li>
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
                                            <h6 class="mb-0 text-dark f-18">Recientes</h6>
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body p-0">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="created_at-1" name="filter[created_at]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="created_at-1">Hoy</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="created_at-2" name="filter[created_at]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="created_at-2">Últimas 24 horas</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="created_at-3" name="filter[created_at]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="created_at-3">Últimos 7 días</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="created_at-4" name="filter[created_at]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="created_at-4">Últimos 14 días</label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="created_at-5" name="filter[created_at]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="created_at-5">Últimos 30 días</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- collapse one end -->
                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                        <div class="card-header" id="headingtwo">
                                            <h6 class="mb-0 text-dark f-18">Categorías</h6>
                                        </div>
                                    </a>
                                    <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                        <div class="card-body p-0">

                                            @foreach($categories AS $category)
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="category-{{$category->id}}" name="filter[category]" class="custom-control-input">
                                                    <label class="custom-control-label ml-1 text-muted f-15" for="customRadio7">
                                                        {{ucfirst(mb_strtolower($category->category_name))}}
                                                    </label>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <!-- collapse one end -->




                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                        <div class="card-header" id="headingthree">
                                            <h6 class="mb-0 text-dark f-18">Experiencias</h6>
                                        </div>
                                    </a>
                                    <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                        <div class="card-body p-0">

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="experience-1" name="filter[experience]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="experience-1">
                                                    {{ucfirst(mb_strtolower(\App\Models\Job::EXPERIENCE_1))}}
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="experience-2" name="filter[experience]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="experience-2">
                                                    {{ucfirst(mb_strtolower(\App\Models\Job::EXPERIENCE_2))}}
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="experience-3" name="filter[experience]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="experience-3">
                                                    {{ucfirst(mb_strtolower(\App\Models\Job::EXPERIENCE_3))}}
                                                </label>
                                            </div>

                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="experience-4" name="filter[experience]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="experience-4">
                                                    {{ucfirst(mb_strtolower(\App\Models\Job::EXPERIENCE_MAS))}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- collapse one end -->




                                <div class="card rounded mt-4">
                                    <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                        <div class="card-header" id="headingfour">
                                            <h6 class="mb-0 text-dark f-18">Género</h6>
                                        </div>
                                    </a>
                                    <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                        <div class="card-body p-0">


                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="gender-1" name="filter[gender]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="gender-1">
                                                    {{ucfirst(mb_strtolower(\App\Models\UserProfile::GENDER_M))}}
                                                </label>
                                            </div>


                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="gender-2" name="filter[gender]" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted f-15" for="gender-2">
                                                    {{ucfirst(mb_strtolower(\App\Models\UserProfile::GENDER_F))}}
                                                </label>
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
                                                            <a href="{{url('company-detail-profile/'.Crypt::encryptString($job->company_slug.'-'.$job->id))}}"class="btn  btn-primary-outline btn-sm" style="border: none;">
                                                            <img src="{{ asset('storage/company/' .$job->company_logo)}}" alt="{{$job->company_slug}}"
                                                                 class="img-fluid mx-auto d-block" style="border-radius: 90px; width: 150px;">
                                                            </a>
                                                        @else
                                                            <img src="https://via.placeholder.com/300X300//88929f/5a6270C/O https://placeholder.com/"
                                                                 height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-lg-7 col-md-9">
                                                    <div class="job-list-desc">
                                                        <h6 class="mb-2">
                                                            <a href="{{url('job-detail/'.Crypt::encryptString($job->job_slug.'-'.$job->id_published))}}" class="text-dark">
                                                                {{$job->job_title}}
                                                            </a>
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
                            @if (isset($jobs))
                                {{ $jobs->appends(((isset($filter)) ? $filter : ''))->links() }}
                            @endif
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