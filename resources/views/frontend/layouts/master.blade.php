<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>.:: FUERZA INCLUSIVA ::.</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontend.layouts.css')
</head>
<body>

<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>

@include('frontend.layouts.menu')
@yield('content')

<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class=""><p class="mb-0">© 2021 Copyright Fuerza Inclusiva - Todos los derechos reservados</p></div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top rounded text-center" id="back-to-top"> <i class="mdi mdi-chevron-up d-block"> </i></a>
@include('frontend.layouts.js')

<script type="text/javascript">
    function showAlert(text, option) {
        if (option == 'success') {
            toastr.success(text)
        }
        if (option == 'fail') {
            toastr.error(text)
        }
    }

    function pages(url) {
        window.location.href = url;
    }

</script>
</body>
</html>