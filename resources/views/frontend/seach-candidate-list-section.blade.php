<section class="bg-half page-next-level" >
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Lista de candidatos</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="{{route('jobs')}}" class="text-uppercase font-weight-bold">Inicio</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Páginas</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Candidatos</a></li>
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Lista de candidatos</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="home-form-position">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="home-registration-form job-list-reg-form bg-light shadow p-4">
                    <form class="registration-form">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="registration-form-box">
                                    <i class="fa fa-briefcase"></i>
                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Trabajo...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="registration-form-box">
                                    <i class="fa fa-location-arrow"></i>
                                    <select id="select-country" class="demo-default">
                                        <option value="">Ubicación</option>
                                        <option value="AF">Colombia</option>
                                        <option value="AL">Venezuela</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="registration-form-box">
                                    <i class="fa fa-list-alt"></i>
                                    <select id="select-category" class="demo-default">
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