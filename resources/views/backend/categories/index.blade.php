@extends('backend.layouts.main')
@section('title','Categories')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Danh sách thể loại</h1>
            <a href="{{ url('/backend/categories/create') }}" class="btn btn-primary">
                Thêm mới
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th></th>
                </tr>
                @foreach($categories AS $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @php
                            $status_text = '';
                            switch ($category->status){
                                case 0: $status_text = "Ẩn";
                                break;
                                case 1: $status_text = "Hiện";
                                break;
                            }
                            echo $status_text;
                            @endphp
                        </td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($category->created_at)) }}</td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($category->updated_at)) }}</td>
                        <td>
                            <a href="{{ url('backend/categories/delete/' . $category->id) }}"
                               onclick="return confirm('Bạn có muốn xóa hay ko?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </section>
        <div style="text-align: center;">
            {{ $categories->links() }}
        </div>
        <!-- /.content -->
    </div>
@endsection
