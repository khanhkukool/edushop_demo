@extends('layouts.main')
@section('title','Trang chủ')
@section('content')

    <!-- HOME -->
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    @foreach($banners AS $banner)
                        <div class="banner banner-1">
                            <img src="{{ asset('/uploads/' . $banner->path) }}">
                        </div>
                @endforeach
                <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="unica-learn-today">
                        <h4>Hôm nay bạn muốn học gì ?</h4>
                        <ul class="unica-lt-box">
                            <li>
                                <a href="{{ url('/category/music') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-music" aria-hidden="true"></i> Âm nhạc</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/infoTechnology') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-code" aria-hidden="true') }}"></i> Công nghệ thông tin</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/startup') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-rocket" aria-hidden="true"></i> Kinh doanh - khởi nghiệp</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/multi') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-video-camera"></i> Multimedia</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/marketing') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-line-chart" aria-hidden="true"></i> Marketing</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/languages') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-language" aria-hidden="true"></i> Ngoại ngữ</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/art') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-pagelines" aria-hidden="true"></i> Nghệ thuật</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/design') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-paint-brush" aria-hidden="true"></i> Thiết kế</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/health') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-heartbeat" aria-hidden="true"></i> Thể thao - sức khỏe</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/infoOffice') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-desktop" aria-hidden="true"></i> Tin học văn phòng</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/skills') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-cutlery" aria-hidden="true"></i> Kỹ năng sống</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/category/marriage') }}" class="u-tags-mini">
                                    <p><i class="fa fa fa-heart" aria-hidden="true"></i> Hôn nhân - gia đình</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Top khóa học</h2>
                    </div>
                </div>
                <!-- section title -->
            @foreach($top_products AS $top_product)
                <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            @if($top_product->old_price != 0)
                                <div class="product-label">
                                    <span>Sale</span>
                                    <span
                                        class="sale">{{ floor(100-($top_product->price/$top_product->old_price)*100) }}%</span>
                                </div>
                            @endif
                            <div class="product-thumb">
                                <img src="{{ asset('/uploads/'. $top_product->avatar) }}" alt="" height="150px">
                            </div>
                            <div class="product-body">
                                @if($top_product->old_price == 0)
                                    <h3 class="product-price">{{ number_format($top_product->price,0,'.','.') }} đ</h3>
                                @else
                                    <h3 class="product-price">{{ number_format($top_product->price,0,'.','.') }} đ
                                        <del
                                            class="product-old-price">{{ number_format($top_product->old_price,0,'.','.') }}
                                            đ
                                        </del>
                                    </h3>
                                @endif
                                <h2 class="product-name"><a href="{{ url('/product/'.\App\Helper::alias($top_product->title).'/'.$top_product->id) }}">{{ $top_product->title }}</a></h2>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <a href="{{ url('/cart/' . $top_product->id) }}">
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ hàng
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                @endforeach
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Khuyến mại</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-2 custom-dots">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section title -->

            @foreach($sale_products AS $sale_product)
                <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                @if($sale_product->old_price != 0)
                                    <div class="product-label">
                                        <span>Sale</span>
                                        <span class="sale">{{ floor(100-($sale_product->price/$sale_product->old_price)*100) }}%</span>
                                    </div>
                                @endif
                                <img src="{{ asset('/uploads/'. $sale_product->avatar) }}" alt="" height="150px">
                            </div>
                            <div class="product-body">
                                @if($sale_product->old_price == 0)
                                    <h3 class="product-price">{{ number_format($sale_product->price,0,'.','.') }} đ</h3>
                                @else
                                    <h3 class="product-price">{{ number_format($sale_product->price,0,'.','.') }} đ
                                        <del
                                            class="product-old-price">{{ number_format($sale_product->old_price,0,'.','.') }}
                                            đ
                                        </del>
                                    </h3>
                                @endif
                                <h2 class="product-name"><a href="{{ url('/product/'.\App\Helper::alias($sale_product->title).'/'.$sale_product->id) }}">{{ $sale_product->title }}</a></h2>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <a href="{{ url('/cart/' . $sale_product->id) }}">
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ hàng
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                @endforeach

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Khóa học nổi bật trong ngày</h2>
                    </div>
                </div>
                <!-- section title -->

            @foreach($top_products AS $top_product)
                <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            @if($top_product->old_price != 0)
                                <div class="product-label">
                                    <span>Sale</span>
                                    <span
                                        class="sale">{{ floor(100-($top_product->price/$top_product->old_price)*100) }}%</span>
                                </div>
                            @endif
                            <div class="product-thumb">
                                <img src="{{ asset('/uploads/'. $top_product->avatar) }}" alt="" height="150px">
                            </div>
                            <div class="product-body">
                                @if($top_product->old_price == 0)
                                    <h3 class="product-price">{{ number_format($top_product->price,0,'.','.') }} đ</h3>
                                @else
                                    <h3 class="product-price">{{ number_format($top_product->price,0,'.','.') }} đ
                                        <del
                                            class="product-old-price">{{ number_format($top_product->old_price,0,'.','.') }}
                                            đ
                                        </del>
                                    </h3>
                                @endif
                                <h2 class="product-name"><a href="{{ url('/product/'.\App\Helper::alias($top_product->title).'/'.$top_product->id) }}">{{ $top_product->title }}</a></h2>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <a href="{{ url('/cart/' . $top_product->id) }}">
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                        Thêm vào giỏ hàng
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                @endforeach
            </div>
            <!-- /row -->

        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
