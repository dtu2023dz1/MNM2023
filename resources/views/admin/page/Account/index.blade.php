@extends('admin.share.master')
@section('content')
<div class="row" id="app">
    <div class="col-md-4">
        <div class="card border border-primary">
            <div class="card-header">
                Thêm Mới Tài Khoản
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="mb-2" for="">Họ Và Tên</label>
                    <input type="text" class="form-control" placeholder="Nhập Họ Và Tên" v-model="account.full_name">
                </div>
                <div class="row mb-3">
                    <label class="mb-2" for="">Email</label>
                    <input type="text" class="form-control" placeholder="Nhập Email" v-model="account.email">
                </div>
                <div class="row mb-3">
                    <label class="mb-2" for="">Số Điện Thoại</label>
                    <input type="tel" class="form-control" placeholder="Nhập Số điện thoại" v-model="account.so_dien_thoai">
                </div>
                <div class="row mb-3">
                    <label class="mb-2" for="">Username</label>
                    <input type="text" class="form-control" placeholder="Nhập Username" v-model="account.username">
                </div>
                <div class="row mb-3">
                    <label class="mb-2" for="">Password</label>
                    <input type="text" class="form-control" placeholder="Nhập Mật khẩu" v-model="account.password">
                </div>
            </div>
            <div class="card-footer">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary" @click="accountStore()">Thêm Mới</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card border border-primary">
            <div class="card-header">
                Danh Sách Tài Khoản
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Họ Và Tên</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Tình Trạng</th>
                                <th>Áction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(value, index) in list">
                                <th class="text-center align-middle">@{{ index + 1 }}</th>
                                <td class="align-middle">@{{ value.full_name }}</td>
                                <td class="align-middle">@{{ value.username }}</td>
                                <td class="align-middle">@{{ value.email }}</td>
                                <td class="text-center align-middle">@{{ value.so_dien_thoai }}</td>
                                <td class="text-center align-middle">
                                    <button v-if="value.is_open == 1" class="btn btn-success" @click="changeStatus(value)">Hoạt Động</button>
                                    <button v-else class="btn btn-danger" @click="changeStatus(value)">Tạm Tắt</button>
                                </td>
                                <td class="text-center align-middle">
                                    <div class="btn-group">
                                        <button type="button" v-on:click="account_update = Object.assign({}, value)" class="btn btn-success" data-toggle="dropdown" ><i class="fa-solid fa-pen-to-square"></i></button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#capNhatTaiKhoan" >Cập Nhật</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#capNhatMatKhau">Đổi Mật Khẩu</a>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger" v-on:click="account_delete = Object.assign({}, value)" data-toggle="modal" data-target="#xoaModal"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="m-b-30" aria-label="Page navigation example">
                    <ul class="pagination justify-content-end pagination-primary">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Previous"
                                @click.prevent="changePage(pagination.current_page - 1)">
                                <span aria-hidden="true">Pre</span>
                            </a>
                        </li>
                        <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']" class="page-item">
                            <a class="page-link" href="javascript:void(0)" @click.prevent="changePage(page)">@{{ page }}</a>
                        </li>
                        <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                            <a href="javascript:void(0)" class="page-link" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                {{-- Modal --}}
                <div class="modal fade" id="capNhatTaiKhoan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Tài Khoản</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label class="mb-2" for="">Họ Và Tên</label>
                                <input type="text" class="form-control" placeholder="Nhập Họ Và Tên" v-model="account_update.full_name">
                            </div>
                            <div class="row mb-3">
                                <label class="mb-2" for="">Email</label>
                                <input type="text" class="form-control" placeholder="Nhập Email" v-model="account_update.email">
                            </div>
                            <div class="row mb-3">
                                <label class="mb-2" for="">Số Điện Thoại</label>
                                <input type="tel" class="form-control" placeholder="Nhập Số điện thoại" v-model="account_update.so_dien_thoai">
                            </div>
                            <div class="row mb-3">
                                <label class="mb-2" for="">Username</label>
                                <input type="text" class="form-control" placeholder="Nhập Username" v-model="account_update.username">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                          <button type="button" class="btn btn-primary" v-on:click="update()">Lưu</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal fade" id="capNhatMatKhau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Mật Khẩu</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <label class="mb-2" for="">Nhập Mật Khẩu Mới</label>
                                <input type="text" class="form-control" id="password" placeholder="Nhập mật khẩu mới">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                          <button type="button" class="btn btn-primary" v-on:click="updatePassword()">Lưu</button>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal fade" id="xoaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Mật Khẩu</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger" role="alert">
                                Bạn có chắc chắn muốn xóa tài khoản không!
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                          <button type="button" class="btn btn-danger" v-on:click="destroy()">Xác Nhận</button>
                        </div>
                      </div>
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
        el          : "#app",
        data        : {
            pagination: {
                total: 0,
                per_page: 2,
                from: 1,
                to: 0,
                current_page: 1
            },
            check       : true,
            offset: 4,
            account         : {},
            list            : [],
            account_update  : {},
            account_delete  : {}
        },
        created() {
            this.loadData(this.pagination.current_page);
        },
        methods : {
            accountStore() {
                axios
                    .post('/admin/account/create', this.account)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            this.account = {};
                            this.loadData(this.pagination.current_page)
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

            loadData : function(page) {
                axios
                    .get('/admin/account/data?page=' + page)
                    .then((res) => {
                        this.list = res.data.data.data.data
                    });
            },

            changePage: function (page) {
                this.pagination.current_page = page;
                if(this.check) {
                    this.loadData(page);
                }
            },

            update() {
                axios
                    .post('/admin/account/update', this.account_update)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            $("#capNhatTaiKhoan").modal("hide");
                            this.loadData(this.pagination.current_page)
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

            updatePassword() {
                this.account_update.password = $("#password").val();
                axios
                    .post('/admin/account/update-password', this.account_update)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            $("#capNhatMatKhau").modal("hide");
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

            destroy() {
                axios
                    .post('/admin/account/delete', this.account_delete)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            $("#xoaModal").modal("hide");
                            this.loadData(this.pagination.current_page)
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

            changeStatus(value) {
                axios
                    .post('/admin/account/change-status', value)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success(res.data.message);
                            this.loadData(this.pagination.current_page)
                        } else {
                            toastr.error(res.data.message);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
        },

        computed: {
            isActived: function () {
                return this.pagination.current_page;
            },
            pagesNumber: function () {
                if (!this.pagination.to) {
                    return [];
                }
                var from = this.pagination.current_page - this.offset;
                if (from < 1) {
                    from = 1;
                }
                var to = from + (this.offset * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while (from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            },
        },
    });
</script>
@endsection
