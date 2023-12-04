@extends('admin.share.master')
@section('content')
    <div class="row" id="app">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label for="">API Token</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" v-model="user.token"  disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text" v-on:click="copyClipboard(user.token)"><i class="fa-regular fa-copy"></i></span>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" style="margin-top: 30px" v-on:click="changeToken()">Đổi Token</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    new Vue({
        el      : "#app",
        data    : {
            user    : {},
        },
        created() {
            this.getToken();
        },
        methods: {
            getToken() {
                axios
                    .get('/admin/account/get-token')
                    .then((res) => {
                        if(res.data.status) {
                            this.user = res.data.user;
                        }
                    })
            },

            copyClipboard(text) {
                navigator.clipboard.writeText(text).then(() => {
                    toastr.success("Copied");
                },() => {
                    toastr.error("Fail");
                });
            },

            changeToken() {
                axios
                    .post('/admin/account/change-token', this.user)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            this.getToken();
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
            },
        },
    });
</script>
@endsection
