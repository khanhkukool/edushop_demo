@extends('backend.layouts.main')
@section('title','Detail categories')
@section('content')

        <!-- Main content -->
        <section class="content">
            <h1>Danh sách chi tiết thể loại</h1>
            <a href="{{ url('/backend/detail_categories/create') }}" class="btn btn-primary">
                Thêm mới
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Thể loại</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th></th>
                </tr>
                @foreach($detail_categories AS $detail_category)
                    <tr>
                        <td>{{ $detail_category->id }}</td>
                        <td>{{ $detail_category->name }}</td>
                        <td>{{ $detail_category->category_id }}</td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($detail_category->created_at)) }}</td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($detail_category->updated_at)) }}</td>
                        <td>
                            <a href="{{ url('backend/detail_categories/delete/' . $detail_category->id) }}"
                               onclick="return confirm('Bạn có muốn xóa hay ko?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
        <div style="text-align: center;">
            {{ $detail_categories->links() }}
        </div>
        <!-- /.content -->
    </div>
@endsection
