@extends('client.share.master')
@section('content')
    <div class="container" id="app">
        <div class="row mt-5 d-flex align-items-center text-nowrap">
            <div class="col">
                <select v-model="id_chu_de" v-on:change="createDeMucByID(id_chu_de)" class="form-control">
                    <option value="" selected disabled>--Xem theo chủ đề--</option>
                    <template v-for="(v, k) in list_chu_de_select">
                        <option v-bind:value="v.id">@{{ v.ten_chu_de }}</option>
                    </template>
                </select>
            </div>
            <div class="col">
                <select v-model="id_de_muc" class="form-control">
                    <option value="" selected disabled>--Xem theo đề mục--</option>
                    <template v-for="(v, k) in list_de_muc_select">
                        <option v-bind:value="v.id">@{{ v.ten_de_muc }}</option>
                    </template>
                </select>
            </div>
            <div class="col">
                <button class="genric-btn danger circle w-100" v-on:click="searchPhapDien()">Tìm Kiếm</button>
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
                                                                :data-target="'#collapse' + va.id + v.id"
                                                                aria-expanded="true"
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
                                                                <p><a v-on:click="getDataTieuMuc(value.id)" href=""
                                                                        class="text-dark" data-toggle="modal"
                                                                        :data-target="'#exampleModal' + va.id + v.id + value.id"><i
                                                                            class="fa-regular fa-bookmark mr-2"></i>
                                                                        @{{ value.ten_chuong }}</a></p>
                                                                <div class="modal fade" :id="'exampleModal' + va.id + v.id + value.id" tabindex="-1"
                                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl"
                                                                        style="max-width: 100% !important; margin-left: 15px"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">
                                                                                    @{{ value.ten_chuong }}</h5>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <template v-for="(val, k) in list_tieu_muc">
                                                                                    <p><b>@{{ val.ten_tieu_muc }}</b></p>
                                                                                    <p><i><a
                                                                                                v-bind:href="v.link_ghi_chu">@{{ val.ghi_chu }}</a></i>
                                                                                    </p>
                                                                                    <p>@{{ val.noi_dung }}</p>
                                                                                    <p><i>@{{ val.chi_dan }}</i></p>
                                                                                </template>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
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
                list_tieu_muc: [],
                id_chu_de: {},
                id_de_muc: {},
                list_chu_de_select: [],
                list_de_muc_select: [],
            },
            created() {
                this.loadDataChuDe();
                this.loadDataDeMuc();
                this.loadDataChuong();
            },
            methods: {
                loadDataChuDe() {
                    axios
                        .get('/chu-de/data-homepage')
                        .then((res) => {
                            this.list_chu_de = res.data.data;
                            this.list_chu_de_select = res.data.data;
                        });
                },
                loadDataDeMuc() {
                    axios
                        .get('/de-muc/data-homepage')
                        .then((res) => {
                            this.list_de_muc = res.data.data;
                        });
                },
                loadDataChuong() {
                    axios
                        .get('/chuong/data-homepage')
                        .then((res) => {
                            this.list_chuong = res.data.data;
                        });
                },
                createDeMucByID(id) {
                    axios
                        .get(`/api/create-de-muc-data/` + id)
                        .then((res) => {
                            this.list_de_muc_select = res.data.data;
                        });
                },
                getDataTieuMuc(id) {
                    axios
                        .get(`/api/create-tieu-muc-data/` + id)
                        .then((res) => {
                            this.list_tieu_muc = res.data.data;
                        });
                },
                searchPhapDien() {
                    var payload = {
                        'id_chu_de': this.id_chu_de,
                        'id_de_muc': this.id_de_muc,
                    };
                    axios
                        .post(`/api/search-phap-dien/`, payload)
                        .then((res) => {
                            this.list_chu_de = res.data.data_chu_de;
                            this.list_de_muc = res.data.data_de_muc;
                            this.list_chuong = res.data.data_chuong;
                        });
                },
            }
        });
    </script>
@endsection
