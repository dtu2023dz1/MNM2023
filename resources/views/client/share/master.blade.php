<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('client.share.head')
</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="https://dzfullstack.com/assets/images/logo-1.png" alt="">
            </div>
        </div>
    </div>
</div>
@include('client.share.top')
<main>
    @yield('content')
</main>
@include('client.share.footer')
@include('client.share.js')
@yield('js')
</body>
</html>
