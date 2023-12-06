@extends('client.share.master')
@section('content')
<div id="app">
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            @foreach ($line_1 as $key => $value)
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ $value->hinh_anh }}" class="img-fluid" style="height: 600px" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">NEW</span>
                                            <h2><a href="/bai-viet/{{ $value->id }}" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{ $value->ten_bai_viet }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-6">
                                <div class="section-tittle mb-30">
                                    <h3>Tin Tức</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            @php
                                                $left = $line_2[0]
                                            @endphp
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="{{$left->hinh_anh}}" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="/bai-viet/{{ $left->id }}">{{$left->ten_bai_viet}}</a></h4>
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="whates-img">
                                                    <a href="https://phapdien.moj.gov.vn/Pages/chi-tiet-bo-phap-dien.aspx" target="_blank"><img src="/image/bo_phap_dien.gif" style="width: 320px; height: 250;"  alt=""></a>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    @foreach ($line_2 as $key => $value)
                                                        @if ($key > 0)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single mb-20">
                                                                <div class="whats-right-img">
                                                                    <img src="{{ $value->hinh_anh }}" alt="" style="height: 120px;width: 124px">
                                                                </div>
                                                                <div class="whats-right-cap">
                                                                    {{-- <span class="colorb">Tin Tức</span> --}}
                                                                    <h4><a href="/bai-viet/{{ $value->id }}">{{ $value->ten_bai_viet }}</a></h4>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="{{ $line_3[0]->hinh_anh }}" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#"></a></h4>
                                                        <p>{{ $line_3[0]->ten_bai_viet }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="/assets_client/img/gallery/whats_right_img1.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="/bai-viet/{{ $value->id }}">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="/assets_client/img/gallery/whats_right_img2.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="/bai-viet/{{ $value->id }}">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="/assets_client/img/gallery/whats_right_img3.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="/bai-viet/{{ $value->id }}">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="/assets_client/img/gallery/whats_right_img4.png" alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="/bai-viet/{{ $value->id }}">Portrait of group of friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <!-- Banner -->
                    {{-- <div class="banner-one mt-20 mb-30">
                        <img src="/assets_client/img/gallery/body_card1.png" alt="">
                    </div> --}}
                </div>
                <div class="col-lg-4">
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <!-- Section Tittle -->
                        <div class="small-tittle mb-20 mt-5">
                            <h4>Most Recent</h4>
                        </div>
                        <!-- Details -->
                        <div class="most-recent mb-40">
                            <div class="most-recent-img">
                                <img src="{{$line_3[0]->hinh_anh}}" alt="">
                                <div class="most-recent-cap">
                                    <h4><a href="/bai-viet/{{ $line_3[0]->id }}">{{ $line_3[0]->ten_bai_viet }}</a></h4>
                                    <p>Admin</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        @foreach ($line_3 as $key => $value )
                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <img src="{{ $value->hinh_anh }}" style="width: 85px; height: 79px;" alt="">
                            </div>
                            <div class="most-recent-capt">
                                <h4><a href="/bai-viet/{{ $value->id }}">{{ $value->ten_bai_viet }}</a></h4>
                                <p>Admin</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="recent-articles pt-80 pb-80">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Trending  News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="/assets_client/img/gallery/tranding1.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#" > <h4><a href="/bai-viet/{{ $value->id }}">What to Expect From the 2020 Oscar Nomin ations</a></h4></a></h4>
                                    <P>Jun 19, 2020</P>
                                    <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>

                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="/assets_client/img/gallery/tranding2.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="/bai-viet/{{ $value->id }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                    <P>Jun 19, 2020</P>
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="/assets_client/img/gallery/tranding1.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="/bai-viet/{{ $value->id }}"> <h4><a href="/bai-viet/{{ $value->id }}">What to Expect From the 2020 Oscar Nomin ations</a></h4></a></h4>
                                    <P>Jun 19, 2020</P>
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="/assets_client/img/gallery/tranding2.png" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="/bai-viet/{{ $value->id }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                    <P>Jun 19, 2020</P>
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Phổ Biến</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">
                                        @foreach ($line_4 as $key=>$value )
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ $value->hinh_anh }}" alt="" style="width: 255px; height: 170px;">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="/bai-viet/{{ $value->id }}">{{ $value->ten_bai_viet }}</a></h4>
                                                    <p></p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
