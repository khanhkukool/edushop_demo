@extends('backend.layouts.main')
@section('title', 'Create product')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới sản phẩm</h1>
            <form method="post" action="{{ url('backend/products/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Thể loại</label>
                    <select name="category" id="category">
                        @foreach($categories AS $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
{{--                khai báo id để đổ dữ liệu từ ajax trả về--}}
                <div class="form-group" id="result-ajax">
                    <label>Chi tiết thể loại</label>
                    <select name="detail_category" id="detail-category">
                        @foreach($detail_categories AS $detail_category)
                            <option value="{{ $detail_category->id }}">{{ $detail_category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#category").change(function (event) {
                            //sử dụng đối tượng this thay thế cho $('#category') để lấy được ra giá trị của option đang được chọn
                            var category_id = $(this).val();
                            console.log(window.location.origin);
                            // gọi ajax
                            $.ajax({
                                //lấy base url đã set tại layout main
                                //oki lấy đc category id r
                               url: base_url + '/backend/categories/getDetailCategory',
                                method: 'GET',
                                data: {
                                   //nhớ phải truyền lên category id khi gọi sự kiện change
                                   category_id: category_id
                                },
                                success: function (data) {
                                    // console.log(data);
                                    //đổ dữ liệu trả về từ ajax vào id = result-ajax
                                    $('#result-ajax').html(data);
                                }
                            });
                        })
                    });
                </script>

                <div class="form-group">
                    <label>User</label>
                    <select name="user">
                        @foreach($users AS $user)
                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input type="file" name="avatar" value="{{ old('avatar') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Old price</label>
                    <input type="number" name="old_price" value="{{ old('old_price') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Summary</label>
                    <input type="text" name="summary" value="{{ old('summary') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" name="content" value="{{ old('content') }}" class="form-control" />
                </div>
                @php
                    $selected_disabled = '';
                    $selected_active = '';
                    switch (old('status')) {
                        case 0: $selected_disabled = "selected=true";
                        break;
                        case 1: $selected_active = "selected=true";
                        break;
                    }
                @endphp
                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option {{ $selected_active }} value="1">Active</option>
                        <option {{ $selected_disabled }} value="0">Disabled</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/products/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
