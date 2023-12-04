@extends('client.share.master')
@section('content')
    <div class="container">
        <div class="row mt-5">
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
                <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm...">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div id="treeBasic">
                    <ul>
                        <li data-jstree="{&quot;opened&quot;:false}">Chủ đề số 1: An ninh quốc gia
                            <ul>
                                <li>Đề mục số 1: An ninh quốc gia
                                    <ul>
                                        <li>Chương I Những quy định chung</li>
                                        <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Chương II BẢO VỆ AN NINH QUỐC GIA</li>
                                        <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Chương III CƠ QUAN CHUYÊN TRÁCH BẢO VỆ AN NINH QUỐC GIA</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {{-- <li data-jstree="{&quot;opened&quot;:false}">index file
                            <ul>
                                <li data-jstree="{&quot;opened&quot;:false}">Assets
                                    <ul>
                                        <li data-jstree="{&quot;opened&quot;:false}">Css
                                            <ul>
                                                <li
                                                    data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">
                                                    Css one</li>
                                                <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Css two</li>
                                            </ul>
                                        </li>
                                        <li data-jstree="{&quot;opened&quot;:true}">Js
                                            <ul>
                                                <li data-jstree="{&quot;selected&quot;:true,&quot;type&quot;:&quot;file&quot;}">
                                                    Js one</li>
                                                <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Js two</li>
                                            </ul>
                                        </li>
                                        <li data-jstree="{&quot;opened&quot;:true}">Scss
                                            <ul>
                                                <li data-jstree="{&quot;opened&quot;:false}">Sub Child
                                                    <ul>
                                                        <li
                                                            data-jstree="{&quot;selected&quot;:false,&quot;type&quot;:&quot;file&quot;}">
                                                            Sub File</li>
                                                        <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Sub File</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Scss two</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li data-jstree="{&quot;opened&quot;:true}">Default
                                    <ul>
                                        <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Dashboard</li>
                                        <li data-jstree="{&quot;type&quot;:&quot;file&quot;}">Typography</li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        <li>index file 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
