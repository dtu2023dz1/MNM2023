@extends('client.share.master')
@section('content')
    <div class="container" id="app">
        <div class="row mt-5 d-flex align-items-center">
            <div class="col">
                <select class="form-select">
                    <option value="">--Xem theo chủ đề--</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select">
                    <option value="">--Xem theo đề mục--</option>
                </select>
            </div>
            <div class="col">
                <button class="btn btn-danger w-100">Tìm Kiếm</button>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <template v-for="(v, k) in list_chu_de">
                            <div :id="'accordion' + v.id">
                                <div class="mb-2">
                                    <div class="" :id="'heading' + v.id">
                                        <h5 class="mb-0">
                                            <div class="w-100" data-toggle="collapse" :data-target="'#collapse' + v.id"
                                                aria-expanded="true" :aria-controls="'collapse' + v.id">
                                                <a href="#" style="pointer-events: none;"><i
                                                        class="fa-solid fa-layer-group mr-2"></i> @{{ v.ten_chu_de }}</a>
                                            </div>
                                        </h5>
                                    </div>

                                    <div :id="'collapse' + v.id" class="collapse" :aria-labelledby="'heading' + v.id"
                                        :data-parent="'#accordion' + v.id">
                                        <div class="card-body">
                                            <template v-for="(va, ke) in list_de_muc" v-if="va.id_chu_de == v.id">
                                                <div class="mb-2">
                                                    <div class="" :id="'heading' + va.id + v.id">
                                                        <h5 class="mb-0">
                                                            <div class="w-100" data-toggle="collapse"
                                                                :data-target="'#collapse' + va.id + v.id" aria-expanded="true"
                                                                :aria-controls="'collapse' + va.id + v.id">
                                                                <a href="#" style="pointer-events: none;"><i
                                                                        class="fa-solid fa-book mr-2"></i>
                                                                    @{{ va.ten_de_muc }}</a>
                                                            </div>
                                                        </h5>
                                                    </div>

                                                    <div :id="'collapse' + va.id + v.id" class="collapse"
                                                        :aria-labelledby="'heading' + va.id + v.id"
                                                        :data-parent="'#accordion' + va.id + v.id">
                                                        <div class="card-body">
                                                            <template v-for="(value, key) in list_chuong"
                                                                v-if="value.id_chu_de == v.id, value.id_de_muc == va.id">
                                                                <p><a href="" class="text-dark" data-toggle="modal"
                                                                        data-target="#exampleModal"><i
                                                                            class="fa-regular fa-bookmark mr-2"></i>
                                                                        @{{ value.ten_chuong }}</a></p>
                                                            </template>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-xl"
                                                                    style="max-width: 100% !important; margin-left: 15px"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Modal
                                                                                title</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ...
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                list_chu_de: [],
                list_de_muc: [],
                list_chuong: [],
            },
            created() {
                this.loadDataChuDe();
                this.loadDataDeMuc();
                this.loadDataChuong();
            },
            methods: {
                loadDataChuDe() {
                    axios
                        .get('/api/admin/chu-de/data')
                        .then((res) => {
                            this.list_chu_de = res.data.data;
                            console.log(this.list_chu_de);
                        });
                },
                loadDataDeMuc() {
                    axios
                        .get('/api/admin/de-muc/data')
                        .then((res) => {
                            this.list_de_muc = res.data.data;
                        });
                },
                loadDataChuong() {
                    axios
                        .get('/api/admin/chuong/data')
                        .then((res) => {
                            this.list_chuong = res.data.data;
                        });
                },
            }
        });
    </script>
@endsection
