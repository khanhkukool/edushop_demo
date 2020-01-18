@extends('layouts.main')
@section('title','Nghệ thuật')
@section('content')

    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Category</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                @yield('aside')
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="pull-left">
                            <span class="filter-sort-text"><h3>Sắp xếp</h3></span>
                        </div>
                        <div class="pull-right">
                            <span data-url="" class="sub-menu-filter active"><a>Học nhiều nhất</a></span> &nbsp;
                            <span data-url="" class="sub-menu-filter"><a>Đánh giá cao</a></span> &nbsp;
                            <span data-url="" class="sub-menu-filter"><a>Mới nhất</a></span> &nbsp;
                            <span data-url="" class="sub-menu-filter"><a>Giá thấp đến cao</a></span> &nbsp;
                            <span data-url="" class="sub-menu-filter"><a>Giá cao đến thấp</a></span>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- STORE -->
                    @yield('store')
                    <!-- /STORE -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection

