<!-- all jobs start -->

<section class="section bg-light">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Encuentra trabajo</h4>
                    <p class="text-muted para-desc mx-auto mb-1"> Cuentanos sobre tu proyecto, y te ayudaremos a encontrar prospecto.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">

            <div class="col-lg-9 text-center mt-4 pt-2">
                <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded active" id="recent-job-tab" data-toggle="pill" href="#recent-job" role="tab" aria-controls="recent-job" aria-selected="true">
                            Trabajos recientes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link rounded" id="featured-job-tab" data-toggle="pill" href="#featured-job" role="tab" aria-controls="featured-job" aria-selected="false">
                            Destacados
                        </a>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link rounded" id="part-job-tab" data-toggle="pill" href="#part-job" role="tab" aria-controls="part-job" aria-selected="false">
                            Medio tiempo
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link rounded" id="full-job-tab" data-toggle="pill" href="#full-job" role="tab" aria-controls="full-job" aria-selected="false">Tiempo
                            completo</a>
                    </li>

                </ul>

            </div>

        </div>


        <div class="row">

            <div class="col-12">
                <div class="tab-content mt-2" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                        <div class="row">
                            @foreach($jobs AS $job)
                                <div class="col-lg-12">
                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">

                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>

                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="{{ asset('asset/frontend/images/featured-job/img-1.png')}}" alt=""
                                                             class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">{{$job->job_title}}</a></h5>

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

                                                            {{ucwords(mb_strtolower($job['gender']))}}
                                                        </p>

                                                        <p class="text-muted mb-0 mo-mb-2">
                                                            <i class="mdi mdi-school mr-2"></i>
                                                            {{ucwords(mb_strtolower($job['education_name']))}}
                                                        </p>

                                                        <p class="text-muted mb-0 mo-mb-2">
                                                            <i class="mdi mdi-cash-usd mr-2"></i> {{$job->minimum_salary .' - '.$job->maximum_salary}}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div>
                                                        <p class="text-muted mb-0"><i class="mdi mdi-home-map-marker text-primary mr-2"></i> {{$job['name']}}</p>

                                                        <p class="text-muted mb-0">
                                                            <i class="mdi mdi-timer mr-2"></i>
                                                            {{ucwords(mb_strtolower($job['job_time']))}} {{ucwords(mb_strtolower($job['schedule']))}}
                                                        </p>

                                                        <p class="text-muted mb-0">
                                                            <i class="mdi mdi-calendar mr-2"></i> Experiencia:
                                                            {{ucwords(mb_strtolower($job['year_of_experience']))}}
                                                        </p>

                                                    </div>

                                                </div>


                                            </div>

                                        </div>

                                        <div class="p-3 bg-light">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="text-muted mb-0">
                                                        <i class="mdi mdi-calendar mr-2"></i>
                                                        {{date('d/m/Y', strtotime($job->created_at))}}
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted mb-0 mo-mb-2">
                                                            <span class="text-dark">Categoría :</span>
                                                            {{ucwords(mb_strtolower($job['category_name']))}}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <a href="javascript:void(0)" class="btn btn-dark-outline mb-3 mr-2">postularme</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>