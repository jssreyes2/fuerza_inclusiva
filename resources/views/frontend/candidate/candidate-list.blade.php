@extends('frontend.layouts.master')
@section('content')

    @include('frontend.candidate.seach-candidate-list-section')

    <section class="section pt-0">
        <div class="container">


            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#education-option" class="job-list" aria-expanded="true" aria-controls="collapsefive">
                                    <div class="card-header" id="headingfive">
                                        <h6 class="mb-0 text-dark">Educación</h6>
                                    </div>
                                </a>

                                <div id="education-option" class="collapse show" aria-labelledby="headingfive">

                                    <div class="card-body p-0">
                                        @foreach($education AS $items)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio6">
                                                    {{ucwords(mb_strtolower($items->education_name))}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#industry-option" class="job-list" aria-expanded="true" aria-controls="collapsefive">
                                    <div class="card-header" id="headingfive">
                                        <h6 class="mb-0 text-dark">Industrias</h6>
                                    </div>
                                </a>

                                <div id="industry-option" class="collapse show" aria-labelledby="headingfive">

                                    <div class="card-body p-0">
                                        @foreach($industries AS $industry)
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label ml-1 text-muted" for="customRadio6">
                                                    {{ucwords(mb_strtolower($industry->industry_name))}}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>


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
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio6">
                                                {{ucwords(mb_strtolower(\App\Models\UserProfile::GENDER_F))}}
                                            </label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio7">
                                                {{ucwords(mb_strtolower(\App\Models\UserProfile::GENDER_M))}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="candidates-listing-item">

                        @if(count($candidates) > 0)
                            @foreach($candidates AS $candidate)
                                <div class="border mt-4 rounded p-3">
                                    <div class="row">

                                        <div class="col-md-9">

                                            <div class="float-left mr-4">
                                                @if($candidate->photo)
                                                    <div id="placeholder" style="text-align: center; width: 100%;">
                                                        <img src="{{ asset('storage/photo_users/' .$candidate->photo)}}" alt="{{$candidate->profile_slug}}"
                                                             class="d-block mx-auto shadow rounded-pill mb-4" style=" width: 100px;">
                                                    </div>

                                                @else
                                                    <div id="placeholder" style="text-align: center; width: 100%;">
                                                        <img src="{{ asset('asset/frontend/images/user-avatar.jpg')}}"
                                                             class="d-block mx-auto shadow rounded-pill mb-4" style="width: 100px;">
                                                    </div>
                                                @endif
                                            </div>


                                            <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                                <h5 class="mb-2">
                                                    <a href="#" class="text-dark">{{$candidate->profile_full_name}}</a>
                                                </h5>

                                                <ul class="list-unstyled">

                                                    <li class="text-muted">
                                                        @if($candidate->gender==\App\Models\PublishedJobs::GENDER_M)
                                                            <i class="mdi mdi-gender-male mr-2"></i>
                                                        @endif

                                                        @if($candidate->gender==\App\Models\PublishedJobs::GENDER_F)
                                                            <i class="mdi mdi-gender-female mr-2"></i>
                                                        @endif

                                                        {{ucfirst(mb_strtolower($candidate->gender))}}
                                                    </li>

                                                    <li class="text-muted">
                                                        <i class="mdi mdi-school mr-2"></i>
                                                        {{ucwords(mb_strtolower($candidate->education_name))}}
                                                    </li>


                                                    <li class="text-muted">
                                                        <i class="mdi mdi-phone mr-2"></i> {{$candidate->phone}}
                                                    </li>

                                                    <li class="text-muted">
                                                        <i class="mdi mdi-email mr-2"></i> {{$candidate->email}}
                                                    </li>
                                                </ul>
                                                <p class="text-muted mt-1 mb-0">
                                                    <i class="mdi mdi-home-map-marker text-primary mr-2"></i> {{$candidate->name}}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="candidates-list-fav-btn text-right">
                                                <div class="candidates-listing-btn mt-4">
                                                    <a href="{{url('candidate-detail-profile/'.Crypt::encryptString($candidate->profile_slug.'-'.$candidate->user_id))}}"class="btn btn-primary-outline btn-sm">Ver perfil</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        @else
                            <div class="row justify-content-center">
                                <div class="col-lg-12 mt-4 pt-2">
                                    <div class="section-title text-center mb-4 pb-2">

                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-warning" role="alert">{{ $error }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                    <div class="col-lg-12 mt-4 pt-2">
                        @if (isset($candidates))
                            {{ $candidates->appends(((isset($filter)) ? $filter : ''))->links() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop