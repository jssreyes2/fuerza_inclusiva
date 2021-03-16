<section class="bg-home" style="background: url('https://fuerzainclusiva.com/Views/assets/images/fondo-generico4.jpg') center center;">

    <div class="bg-overlay"></div>

    <div class="home-center">

        <div class="home-desc-center">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-12">

                        <div class="title-heading text-center text-white">

                            <h6 class="small-title text-uppercase text-light mb-3">Encuentra los mejores trabajos</h6>

                            <h1 class="heading font-weight-bold mb-4">La forma más eficiente de conseguir trabajo</h1>

                        </div>

                    </div>

                </div>

                <div class="home-form-position">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="home-registration-form p-4 mb-3">

                                <form class="registration-form" action="{{route('jobs')}}">

                                    <div class="row">

                                        <div class="col-lg-3 col-md-6">

                                            <div class="registration-form-box">

                                                <input type="text" id="search" name="filter[search]" class="form-control"
                                                       placeholder="Trabajo...">

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6">

                                            <div class="registration-form-box">

                                                <select id="country_id" name="filter[country_id]" class="form-control demo-default">

                                                    <option value="">Ubicación</option>
                                                    <option value="AF">Colombia</option>
                                                    <option value="AL">Venezuela</option>

                                                </select>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6">

                                            <div class="registration-form-box">

                                                <select id="category_id" name="filter[category_id]" class="form-control demo-default">

                                                    <option value="">Categorías...</option>

                                                    <option value="4">Desarrollo web</option>

                                                    <option value="1">IT & Software</option>

                                                    <option value="3">Marketing</option>

                                                    <option value="5">Bancario</option>

                                                </select>

                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6">

                                            <div class="registration-form-box">

                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Enviar">

                                            </div>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>