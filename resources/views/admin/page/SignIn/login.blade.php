<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dự Án MNM 2023</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
</head>
<body class="hold-transition login-page">
<div class="login-box" id="app">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>DTU DZ</b></a>
    </div>
    <div class="card-body">
        <form>
            <div class="input-group mb-3">
            <input type="text" class="form-control" v-model="login.username" placeholder="Username or Email" autocomplete="off">
            <div class="input-group-append">
                <div class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" class="form-control" v-model="login.password" placeholder="Password" autocomplete="off">
            <div class="input-group-append">
                <div class="input-group-text">
                    <i class="fa-solid fa-lock"></i>
                </div>
            </div>
            </div>
            <div class="social-auth-links text-center mt-2 mb-3">
                <button type="button" class="btn btn-block btn-primary" @click="actionLogin()">
                    Đăng Nhập
                </button>
            </div>
        </form>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
<script>
    new Vue({
        el      : "#app",
        data    : {
            login   : {}
        },
        created() {

        },
        methods  : {
            actionLogin() {
                axios
                    .post('/admin/login', this.login)
                    .then((res) => {
                        if(res.data.status == 1) {
                            toastr.success(res.data.message);
                            window.location.href = "/";
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            }
        },
    });
</script>
</body>
</html>
