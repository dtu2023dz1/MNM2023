@extends('admin.share.master')

@section('content')
<div class="row" id="app">
    <div class="col-lg-12">
        <div class="card border border-primary">
            <div class="card-header">
                <h4>
                    Danh Sách Chủ Đề
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">#</th>
                                <th class="text-center align-middle">Tên Chủ Đề</th>
                                <th class="text-center align-middle">Số Thứ Tự</th>
                                <th class="text-center align-middle">Trạng Thái</th>
                                <th class="text-center align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="(value, key) in list_chu_de">
                                <tr>
                                    <th class="align-middle text-center">@{{ key + 1 }}</th>
                                    <td class="align-middle">@{{ value.ten_chu_de }}</td>
                                    <td class="align-middle text-center">@{{ value.so_thu_tu }}</td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-outline-success" style="width: 70%" v-on:click="doiTrangThai(value)" v-if="value.is_open">Đang hoạt động</button>
                                        <button class="btn btn-outline-danger" style="width: 70%" v-on:click="doiTrangThai(value)" v-else>Hết Hạn</button>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-outline-primary" v-on:click="edit = Object.assign({}, value)" data-toggle="modal" data-target="#capNhatChuDeModal">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </td>
                                </tr>
                            </template>
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
                <div class="modal fade" id="capNhatChuDeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Chủ Đề</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label>Tên chủ đề</label>
                                <input type="text" class="form-control" v-model="edit.ten_chu_de">
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
            list_chu_de : [],
            edit        : {},
            pagination: {
                total: 0,
                per_page: 2,
                from: 1,
                to: 0,
                current_page: 1
            },
            check       : true,
            offset: 4,
        },
        created()   {
            this.getVueItems(this.pagination.current_page);
        },
        methods :   {
            loadData(){
                axios
                    .get('/admin/chu-de/data')
                    .then((res) => {
                        this.list_chu_de = res.data.data;
                        console.log(this.list_chu_de);
                    });
            },

            doiTrangThai(value){
                axios
                    .post('/admin/chu-de/doi-trang-thai', value)
                    .then((res) => {
                        if(res.data.status){
                            toastr.success(res.data.message)
                            this.getVueItems(this.pagination.current_page);
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
                    .post('/admin/chu-de/update', this.edit)
                    .then((res) => {
                        if(res.data.status){
                            toastr.success(res.data.message)
                            $('#capNhatChuDeModal').modal('hide');
                            this.getVueItems(this.pagination.current_page);
                        }
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0], 'Error');
                        });
                    });
            },

            getVueItems: function(page){
                axios
                    .get('/admin/chu-de/data?page='+page) // đổi link ở đây
                    .then((res) => {
                        this.list_chu_de = res.data.data.data.data;
                        this.pagination = res.data.data.pagination;
                    });
            },

            changePage: function (page) {
                this.pagination.current_page = page;
                if(this.check) {
                    this.getVueItems(page);
                }
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
