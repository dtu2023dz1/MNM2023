@extends('admin.share.master')
@section('title')

@endsection
@section('content')
<div class="row" id="app">
    <div class="col-lg-12">
        <div class="card border border-primary">
            <div class="card-header">
                <h4>
                    Danh Sách Đề Mục
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle text-nowrap">#</th>
                                <th class="text-center align-middle text-nowrap">Tên Đề Mục</th>
                                <th class="text-center align-middle text-nowrap">Chủ Đề</th>
                                <th class="text-center align-middle text-nowrap">Số Thứ Tự</th>
                                <th class="text-center align-middle text-nowrap">Trạng Thái</th>
                                <th class="text-center align-middle text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="(value, key) in list_de_muc">
                                <tr>
                                    <th class="align-middle text-center">@{{ key + 1 }}</th>
                                    <td class="align-middle">@{{ value.ten_de_muc }}</td>
                                    <td class="align-middle">@{{ value.ten_chu_de }}</td>
                                    <td class="align-middle text-center">@{{ value.so_thu_tu }}</td>
                                    <td class="align-middle text-center text-nowrap">
                                        <button class="btn btn-outline-success" style="width: 100%" v-on:click="doiTrangThai(value)" v-if="value.is_open">Đang hoạt động</button>
                                        <button class="btn btn-outline-danger" style="width: 100%" v-on:click="doiTrangThai(value)" v-else>Hết Hạn</button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-outline-primary" v-on:click="edit = Object.assign({}, value)" data-toggle="modal" data-target="#capNhatDeMucModal">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="capNhatDeMucModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Đề Mục</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label>Tên Đề Mục</label>
                                <input type="text" class="form-control" v-model="edit.ten_de_muc">
                            </div>
                            <div class="mt-2">
                                <label>Số thứ tự</label>
                                <input type="text" class="form-control" v-model="edit.so_thu_tu">
                            </div>
                            <div class="mt-2">
                                <label>Trạng thái</label>
                                <select class="form-control" v-model="edit.is_open">
                                    <option value="1">Đang Hoạt Động</option>
                                    <option value="0">Hết Hạn</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                          <button type="button" class="btn btn-primary" v-on:click="updateChuDe()">Lưu</button>
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
            list_de_muc : [],
            edit        : {}
        },
        created()   {
            this.loadData();
        },
        methods :   {
            loadData(){
                axios
                    .get('/admin/de-muc/data')
                    .then((res) => {
                        this.list_de_muc = res.data.data;
                        console.log(this.list_de_muc);
                    });
            },

            doiTrangThai(value){
                axios
                    .post('/admin/de-muc/doi-trang-thai', value)
                    .then((res) => {
                        if(res.data.status){
                            toastr.success(res.data.message)
                            this.loadData();
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

            updateChuDe(){
                axios
                    .post('/admin/de-muc/update', this.edit)
                    .then((res) => {
                        if(res.data.status){
                            toastr.success(res.data.message)
                            $('#capNhatDeMucModal').modal('hide');
                            this.loadData();
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },
        },
    });
</script>
@endsection
