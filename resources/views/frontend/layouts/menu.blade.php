<header id="topnav" class="defaultscroll scroll-active">
    <div class="tagline">
        <div class="container">
            <div class="float-left">
                <div class="phone"><i class="mdi mdi-phone-classic"></i> 62105872</div>
                <div class="email"><a href="mailto:info@fuerzainclusiva.com"> <i class="mdi mdi-email"></i> info@fuerzainclusiva.com </a></div>
            </div>
            <div class="float-right">
                <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                    <li class="list-inline-item">
                        <a href="javascript:void(0);">
                            <i class="mdi mdi-account mr-2"></i>
                            @if(isset($user))
                                {{$user->firstname.' '.$user->lastname}}
                            @endif
                        </a>
                    </li>


                    <li class="list-inline-item">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-close-circle mr-2"></i>
                            Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            <input type="hidden" id="backend" name="backend" value="1">
                            @csrf
                        </form>

                    </li>

                    <li class="list-inline-item" style="width: 140px;">
                        <select id="select-lang" class="demo-default" onchange="pages(this.value)">
                            <option value="">Perfil</option>
                            <option value="{{route('company-profile')}}">Agregar compañia</option>
                            <option value="{{route('company-list')}}"> Mis compañias</option>
                            <option value="{{route('my-posts')}}"> Mis publicaciones</option>
                        </select>
                    </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


    <div class="container">
        <div>
            <a href="index.html" class="logo">
                <img src="images/logo-light.png" alt="" class="logo-light" height="18"/>
                <img src="images/logo-dark.png" alt="" class="logo-dark" height="18"/>
            </a>
        </div>

        <div class="buy-button">
            <a href="{{route('post-a-job')}}" class="btn btn-primary">
                <i class="mdi mdi-cloud-upload"></i>
                Publica un trabajo</a>
        </div>


        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{route('jobs')}}">Inicios</a></li>

                <li><a href="{{route('jobs')}}">Trabajos</a></li>

                <li><a href="{{route('candidate-list')}}">Lista Candidatos</a></li>

                <li><a href={{route('contact')}}>contacto</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->

    </div>
</header>