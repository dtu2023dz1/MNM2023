@extends('admin.share.master')
@section('content')
    <div class="row" id="app">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <div class="bd-highlight">
                                    <b>Danh Sách Bài Viết</b>
                                </div>
                                <div class="bd-highlight">
                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#themMoiModal">Thêm Mới</button>
                                </div>
                                <div class="modal fade" id="themMoiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Bài Viết</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-select">Tên Bài Viết</label>
                                                    <input v-model="add.ten_bai_viet" v-on:keyup="slugBaiViet()" type="text" class="form-control" placeholder="Nhập vào tên bài viết...">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label class="form-select">Slug Bài Viết</label>
                                                    <input v-model="slug_bai_viet" type="text" class="form-control" placeholder="Nhập vào slug bài viết...">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label class="form-select">Danh Mục</label>
                                                    <select v-model="add.id_danh_muc" class="form-control" name="" id="">
                                                        <option value="">Chọn Danh Mục</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label class="form-select">Mô Tả</label>
                                                    <textarea v-model="add.mo_ta" class="form-control" name="" id="" cols="30" rows="5" placeholder="Nhập vào nội dung..."></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label class="form-select">Hình Ảnh</label>
                                                    <div class="custom-file">
                                                        <input v-on:change="getFile" type="file" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label class="form-select">Tình Trạng</label>
                                                    <select v-model="add.tinh_trang" class="form-control" name="" id="">
                                                        <option value="1">Hoạt Động</option>
                                                        <option value="0">Tạm Tắt</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                          <button type="button" class="btn btn-primary" v-on:click="themMoi()">Thêm Mới</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle text-nowrap">#</th>
                                    <th class="text-center align-middle text-nowrap">Tên Bài Viết</th>
                                    <th class="text-center align-middle text-nowrap">Hình Ảnh</th>
                                    <th class="text-center align-middle text-nowrap">Mô Tả</th>
                                    <th class="text-center align-middle text-nowrap">Danh Mục</th>
                                    <th class="text-center align-middle text-nowrap">Tình Trạng</th>
                                    <th class="text-center align-middle text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, key) in list">
                                <tr>
                                        <th class="text-center align-middle text-nowrap">@{{ key + 1 }}</th>
                                        <td class="align-middle text-nowrap">@{{ value.ten_bai_viet }}</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <img v-bind:src="value.hinh_anh" class="img-fluid" style="width: 200px; height: 200px;" alt="">
                                        </td>
                                        <td class="align-middle text-wrap">@{{ value.mo_ta }}</td>
                                        <td class="text-center align-middle text-nowrap">@{{ value.id_danh_muc }}</td>
                                        <td class="text-center align-middle text-nowrap">
                                            <template v-if="value.tinh_trang == 1">
                                                <button v-on:click="statusBaiViet(value)" style="width: 150px;" class="btn btn-primary">
                                                    Đang Hoạt Động
                                                </button>
                                            </template>
                                            <template v-else>
                                                <button v-on:click="statusBaiViet(value)" style="width: 150px;" class="btn btn-danger">
                                                    Tắt Hoạt Động
                                                </button>
                                            </template>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <button class="btn btn-outline-primary me-2" v-on:click="edit = Object.assign({}, value)" data-toggle="modal" data-target="#capNhatBaiVietModal">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" v-on:click="xoa = Object.assign({}, value)" data-toggle="modal" data-target="#xoaBaiVietModal">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
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
                        <div class="modal fade" id="capNhatBaiVietModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Bài Viết</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-select">Tên Bài Viết</label>
                                                <input v-model="edit.ten_bai_viet" v-on:keyup="slugBaiVietEdit()" type="text" class="form-control" placeholder="Nhập vào tên bài viết...">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label class="form-select">Slug Bài Viết</label>
                                                <input v-model="edit.slug_bai_viet" type="text" class="form-control" placeholder="Nhập vào slug bài viết...">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label class="form-select">Danh Mục</label>
                                                <select v-model="edit.id_danh_muc" class="form-control" name="" id="">
                                                    <option value="">Chọn Danh Mục</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label class="form-select">Mô Tả</label>
                                                <textarea v-model="edit.mo_ta" class="form-control" name="" id="" cols="30" rows="5" placeholder="Nhập vào nội dung..."></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label class="form-select">Hình Ảnh</label>
                                                <div class="custom-file">
                                                    <input v-on:change="getFileUpdate" type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <label class="form-select">Tình Trạng</label>
                                                <select v-model="edit.tinh_trang" class="form-control" name="" id="">
                                                    <option value="1">Hoạt Động</option>
                                                    <option value="0">Tạm Tắt</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary" v-on:click="capNhatBaiViet()">Cập Nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="xoaBaiVietModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xóa Bài Viết</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa bài viết <span class="text-danger"> @{{xoa.ten_bai_viet}} </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-danger" v-on:click="xoaBaiViet()">Xóa</button>
                                    </div>
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
            el      :   '#app',
            data    :   {
                add             : {'id_danh_muc' : "", "tinh_trang" : 1},
                file            : "",
                list            : [],
                slug_bai_viet   : "",
                xoa             : {},
                edit            : {},
                file_update     : "",
                pagination: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4,
            },
            created()   {
                this.getVueItems(this.pagination.current_page);
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
            methods :   {
                getVueItems: function(page){
                    axios
                        .get('/admin/bai-viet/data?page='+page) // đổi link ở đây
                        .then((res) => {
                            this.list = res.data.data.data.data;
                            this.pagination = res.data.data.pagination;
                        });
                },

                changePage: function (page) {
                    this.pagination.current_page = page;
                    if(this.check) {
                        this.getVueItems(page);
                    }
                },

                toSlug(str) {
                    str = str.toLowerCase();
                    str = str
                        .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
                        .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp
                    str = str.replace(/[đĐ]/g, 'd');
                    str = str.replace(/([^0-9a-z-\s])/g, '');
                    str = str.replace(/(\s+)/g, '-');
                    str = str.replace(/-+/g, '-');
                    str = str.replace(/^-+|-+$/g, '');
                    return str;
                },

                slugBaiVietEdit() {
                    this.edit.slug_bai_viet = this.toSlug(this.edit.ten_bai_viet);
                },
                slugBaiViet() {
                    this.slug_bai_viet = this.toSlug(this.add.ten_bai_viet);
                    this.add.slug_bai_viet  = this.slug_bai_viet;
                },

                getFile(e) {
                    this.file = e.target.files[0];
                    console.log(this.file);
                },

                getFileUpdate(e) {
                    this.file_update = e.target.files[0];
                },

                themMoi() {
                    const payload = new FormData();
                    payload.append('hinh_anh', this.file);
                    payload.append('ten_bai_viet', this.add.ten_bai_viet);
                    payload.append('slug_bai_viet', this.add.slug_bai_viet);
                    payload.append('mo_ta', this.add.mo_ta);
                    payload.append('tinh_trang', this.add.tinh_trang);
                    payload.append('id_danh_muc', this.add.id_danh_muc);
                    axios
                        .post('/admin/bai-viet/create', payload,
                            {
                                headers:
                                    {
                                        'Content-Type': 'multipart/form-data'
                                    }
                            }
                        )
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message);
                                $("#themMoiModal").modal('hide');
                                this.getVueItems(this.pagination.current_page);
                                this.file = "";
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                loadData() {
                    axios
                        .get('/admin/bai-viet/data')
                        .then((res) => {
                            this.list = res.data.data;
                        });
                },

                statusBaiViet(value) {
                    axios
                        .post('/admin/bai-viet/status', value)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message);
                                this.getVueItems(this.pagination.current_page);
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                xoaBaiViet() {
                    axios
                        .post('/admin/bai-viet/delete', this.xoa)
                        .then((res) => {
                            if(res.data.status) {
                                $("#xoaBaiVietModal").modal('hide');
                                toastr.success(res.data.message);
                                this.getVueItems(this.pagination.current_page);
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                capNhatBaiViet() {
                    const payload = new FormData();
                    payload.append('id', this.edit.id);
                    payload.append('hinh_anh', this.file_update);
                    payload.append('ten_bai_viet', this.edit.ten_bai_viet);
                    payload.append('slug_bai_viet', this.edit.slug_bai_viet);
                    payload.append('mo_ta', this.edit.mo_ta);
                    payload.append('tinh_trang', this.edit.tinh_trang);
                    payload.append('id_danh_muc', this.edit.id_danh_muc);
                    console.log(payload);
                    axios
                        .post('/admin/bai-viet/update', payload,
                            {
                                headers:
                                    {
                                        'Content-Type': 'multipart/form-data'
                                    }
                            }
                        )
                        .then((res) => {
                            if(res.data.status) {
                                $("#capNhatBaiVietModal").modal('hide');
                                toastr.success(res.data.message);
                                this.getVueItems(this.pagination.current_page);
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                }
            },
        });
    </script>
@endsection
