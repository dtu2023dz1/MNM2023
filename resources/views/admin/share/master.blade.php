<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.share.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://dzfullstack.com/assets/images/logo-1.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        @include('admin.share.top')

        @include('admin.share.menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                @yield('title')
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('admin.share.footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    @include('admin.share.js')
    @yield('js')
</body>

</html>
