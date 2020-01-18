@extends('backend.layouts.main')
@section('title','Products')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Danh sách sản phẩm</h1>
            <a href="{{ url('/backend/products/create') }}" class="btn btn-primary">
                Thêm mới
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Category_id</th>
                    <th>Detail_category_id</th>
                    <th>User_id</th>
                    <th>Title</th>
                    <th>Avatar</th>
                    <th>Count_videos</th>
                    <th>Count_bills</th>
                    <th>Price</th>
                    <th>Old price</th>
                    <th>Summary</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th></th>
                </tr>
                @foreach($products AS $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->detail_category_id }}</td>
                    <td>{{ $product->user_id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>
                        <img src="{{ asset('/uploads/' . $product->avatar) }}" height="50px">
                    </td>
{{--                    Sử dụng đối tượng hiện tại truy cập đến relation,--}}
{{--                    do trong hàm getAllPagination() đã có hành động gọi phương thức With(<tên-relation>)--}}
                    <td>{{ $product->count_videos }}</td>
                    <td>{{ $product->count_bills }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->old_price }}</td>
                    <td>{{ $product->summary }}</td>
                    <td>{{ $product->content }}</td>
                    <td>
                        @php
                            $status_text = '';
                            switch ($product->status){
                                case 0: $status_text = "Active";
                                break;
                                case 1: $status_text = "Disabled";
                                break;
                            }
                            echo $status_text;
                        @endphp
                    </td>
                    <td>{{  date('d-m-Y H:i:s', strtotime($product->created_at)) }}</td>
                    <td>{{  date('d-m-Y H:i:s', strtotime($product->updated_at)) }}</td>
                    <td>
                        <a href="{{ url('backend/products/show/' . $product->id) }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ url('backend/products/eidt/' . $product->id) }}">
                            <i class="fa fa-pencil-alt"></i> &nbsp;
                        </a>
                        <a href="{{ url('backend/products/delete/' . $product->id) }}"
                           onclick="return confirm('Bạn có muốn xóa hay ko?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </section>
        <div style="text-align: center;">
            {{ $products->links() }}
        </div>
        <!-- /.content -->
    </div>
@endsection
