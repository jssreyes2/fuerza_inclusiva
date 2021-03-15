@extends('frontend.layouts.master')
@section('content')

    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{{isset($company) ? 'Modificar ' : 'Agregar'}} Compañia</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li>
                                <a href="{{route('jobs')}}" class="text-uppercase font-weight-bold">Inicio</a>
                            </li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Páginas</span>
                            </li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">{{isset($company) ? 'Modificar ' : 'Agregar'}} Compañia</span>
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
                <div class="col-lg-12 mt-4 pt-2">
                    <div class="component-wrapper rounded shadow">
                        <div class="p-4 border-bottom bg-light">
                            <h4 class="title mb-0"> {{isset($company) ? 'Modificar compañia ' : 'Registre varias compañias'}} </h4>
                        </div>

                        <div class="p-4">
                            <form id="frm-company-profile">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Nombre de la Compañía <span class="text-danger">*</span></label>
                                            <input name="company_name" id="company_name" type="text" class="form-control required"
                                                   placeholder="Nombre de la Compañía :" autocomplete="off"
                                                   value="{{isset($company) ? $company->company_name: ''}}">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Correo electrónico de la compañia <span class="text-danger">*</span></label>
                                            <input name="company_email" id="company_email" type="text" class="form-control required"
                                                   placeholder="Correo electrónico de la compañia :" autocomplete="off"
                                                   value="{{isset($company) ? $company->company_email: ''}}">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Persona de Contacto <span class="text-danger">*</span></label>
                                            <input name="person_contact" id="person_contact" type="text" class="form-control required"
                                                   placeholder="Persona de Contacto :" autocomplete="off"
                                                   value="{{isset($company) ? $company->person_contact: ''}}">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Cargo del contacto <span class="text-danger">*</span></label>
                                            <input name="person_post" id="person_post" type="text" class="form-control required"
                                                   placeholder="Cargo de Persona:" autocomplete="off"
                                                   value="{{isset($company) ? $company->person_post: ''}}">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Correo electrónico del contacto <span class="text-danger">*</span></label>
                                            <input name="person_email" id="person_email" type="text" class="form-control required email"
                                                   placeholder="Correo electrónico de la persona:" autocomplete="off"
                                                   value="{{isset($company) ? $company->person_email: ''}}">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Teléfono del contacto <span class="text-danger">*</span></label>
                                            <input name="person_phone" id="person_phone" type="number" class="form-control required" pattern="[0-9]{10}"
                                                   placeholder="Teléfono del contacto :" maxlength="20" autocomplete="off"
                                                   value="{{isset($company) ? $company->person_phone: ''}}">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Industria <span class="text-danger">*</span></label>
                                            <select name="industry_id" id="industry_id" class="form-control required tdtextarea">
                                                <option value="">Seleccione...</option>
                                                @foreach($industries AS $items)
                                                    <option value="{{$items['id']}}"
                                                            {{(isset($company) and $company->industry_id==$items['id']) ? 'selected' : ''}}>
                                                        {{$items['industry_name']}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!--end col-->


                                    <div class="col-md-4">
                                        <div class="form-group position-relative">
                                            <label>Estatus <span class="text-danger">*</span></label>
                                            <select name="company_status" id="company_status" class="form-control required tdtextarea">
                                                <option value="{{\App\Models\Company::COMPANY_ACTIVE}}"
                                                        {{(isset($company) and $company->company_status==\App\Models\Company::COMPANY_ACTIVE) ? 'selected' : ''}}>
                                                    {{\App\Models\Company::COMPANY_ACTIVE}}
                                                </option>

                                                <option value="{{\App\Models\Company::COMPANY_INACTIVE}}"
                                                        {{(isset($company) and $company->company_status==\App\Models\Company::COMPANY_INACTIVE) ? 'selected' : ''}}>
                                                    {{\App\Models\Company::COMPANY_INACTIVE}}
                                                </option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Ubicación <span class="text-danger">*</span></label>
                                            <input name="company_location" id="company_location" type="text" class="form-control required"
                                                   placeholder="Ubicación :" autocomplete="off"
                                                   value="{{isset($company) ? $company->company_location: ''}}">
                                        </div>
                                    </div><!--end col-->


                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Descripción de la compañia</label>
                                            <textarea name="company_desciption" id="company_desciption" rows="4" class="form-control required tdtextarea"
                                                      placeholder="Descripción de la compañia :"
                                                      autocomplete="off">{{isset($company) ? $company->company_desciption: ''}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-md-12 text-center" id="loading" style="display: none">
                                        <img src="{{ asset('asset/backend/img/loadingfrm.gif')}}">
                                    </div>

                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        @if(!isset($company))
                                            <input type="hidden" id="route" name="route" value="store">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary btn-frm" value="Registrar Compañia">
                                        @else
                                            <input type="hidden" id="route" name="route" value="update">
                                            <input type="hidden" id="id" name="id" value="{{$company->id}}">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary btn-frm" value="Modificar Compañia">
                                        @endif
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="application/javascript">
        $("body").on('submit', '#frm-company-profile', function (event) {

            event.preventDefault()
            if ($('#frm-company-profile').valid()) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = new FormData(document.getElementById("frm-company-profile"));
                var route = $('#route').val();
                $('#loading').show();
                $('.btn-frm').attr('disabled', true);

                if(route=='store'){
                    var routeController="{{ route('save-company-profile') }}";
                }else{
                    var routeController="{{ route('update-company-profile') }}";
                }

                $.ajax({
                    type: "POST",
                    url: routeController,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    data: formData,
                    success: function (respuesta) {

                        if (respuesta.status == 'success') {
                            $('#loading').hide();
                            showAlert(respuesta.alert, respuesta.status);
                            setTimeout(function () {
                                if (respuesta.edit) {
                                    window.location.href = "{{route('company-list')}}";
                                } else {
                                    location.reload();
                                }
                            }, 2000);
                        }
                        if (respuesta.status == 'fail') {
                            $('#loading').hide();
                            showAlert(respuesta.alert, respuesta.status);
                            setTimeout(function () {
                                $('.btn-frm').attr('disabled', false);
                            }, 2000);
                        }
                    }
                });
            }
        });
    </script>
@stop