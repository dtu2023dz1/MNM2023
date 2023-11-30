@extends('admin.share.master')
@section('title')
Danh Sách Chủ Đề
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên Chủ Đề</th>
                            <th>Số Thứ Tự</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Tên Chủ Đề của mình</th>
                            <th>Số Thứ Tự của mình</th>
                            <th>
                                <button class="btn btn-success">Đang hoạt động</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection
