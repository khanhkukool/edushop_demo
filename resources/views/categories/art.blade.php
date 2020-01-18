@extends('categories.main')
@section('title','Nghệ thuật')
@section('aside')
    <!-- ASIDE -->
    <div id="aside" class="col-md-3">
        <!-- aside widget -->
        <div class="aside">
            <h3 class="aside-title">Nghệ thuật</h3>
            <ul>
                <li class="select-category"><a href="#"></a></li>
            </ul>
        </div>
        <!-- /aside widget -->

        <!-- aside widget -->
        <div class="aside">
            <h3 class="aside-title">Chính sách</h3>
            <form>
                <input type="radio"><span class="select-type-category">  Khuyến mại</span> <br>
                <input type="radio"><span class="select-type-category">  Miễn phí</span>
            </form>
        </div>
        <!-- aside widget -->

        <!-- aside widget -->
        <div class="aside">
            <h3 class="aside-title">Khóa học nổi bật</h3>
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">$32.50
                        <del class="product-old-price">$45.00</del>
                    </h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->

        </div>
        <!-- /aside widget -->
    </div>
    <!-- /ASIDE -->
@endsection
@section('store')
    <!-- STORE -->
    <div id="store">
        <!-- row -->
        <div class="row">
        @foreach($arts AS $art)
            <!-- Product Single -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        @if($art->old_price != 0)
                            <div class="product-label">
                                <span>Sale</span>
                                <span class="sale">{{ floor(100-($art->price/$art->old_price)*100) }}%</span>
                            </div>
                        @endif
                        <div class="product-thumb">
                            <img src="{{ asset('/uploads/'. $art->avatar) }}" alt="" height="150px">
                        </div>
                        <div class="product-body">
                            @if($art->old_price == 0)
                                <h3 class="product-price">{{ number_format($art->price,0,'.','.') }} đ</h3>
                            @else
                                <h3 class="product-price">{{ number_format($art->price,0,'.','.') }} đ
                                    <del
                                        class="product-old-price">{{ number_format($art->old_price,0,'.','.') }}
                                        đ
                                    </del>
                                </h3>
                            @endif
                            <h2 class="product-name"><a href="{{ url('/product/'.\App\Helper::alias($art->title).'/'.$art->id) }}">{{ $art->title }}</a></h2>
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
                                <a href="{{ url('/cart/' . $art->id) }}">
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
    <!-- /STORE -->
@endsection

