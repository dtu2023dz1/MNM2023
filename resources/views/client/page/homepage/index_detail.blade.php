@extends('client.share.master')
@section('content')
<div class="about-area2 gray-bg pt-60 pb-60">
    <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="{{ $bai_viet->hinh_anh }}" style="width :100%"  alt="">
                        </div>
                        <div class="heading-news mb-30 pt-30">
                            <h3>{{ $bai_viet->ten_bai_viet }}</h3>
                        </div>
                        <div class="about-prea">
                            <div class="align-self-center">
                                {!! $bai_viet->mo_ta !!}
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
    </script>
@endsection
