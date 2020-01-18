@extends('categories.main')
@section('title','Multimedia')
@section('aside')
    <!-- ASIDE -->
    <div id="aside" class="col-md-3">
        <!-- aside widget -->
        <div class="aside">
            <h3 class="aside-title">Multimedia</h3>
            <ul>
                <li class="select-category"><a href="#">Các công cụ chỉnh sửa</a></li>
                <li class="select-category"><a href="#">Video</a></li>
                <li class="select-category"><a href="#">Hình ảnh</a></li>
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
            <!-- Product Single -->
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->


            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->


            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->
            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <img src="img/hiennt01.png" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">299.000 đ
                            <del class="product-old-price">499.000 đ</del>
                        </h3>
                        <h2 class="product-name"><a href="#">Guitar đệm hát trong 30 ngày</a></h2>
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
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ
                                hàng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->
        </div>
        <!-- /row -->
    </div>
    <!-- /STORE -->
@endsection
