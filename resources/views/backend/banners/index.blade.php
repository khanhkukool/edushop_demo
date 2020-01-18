@extends('backend.layouts.main')
@section('title','Banners')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Danh sách banner</h1>
        <a href="{{ url('/backend/banners/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th></th>
            </tr>
            @foreach($banners AS $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>
                        <img src="{{ asset('/uploads/' . $banner->path) }}" height="50px">
                    </td>
                    <td>{{  date('d-m-Y H:i:s', strtotime($banner->created_at)) }}</td>
                    <td>{{  date('d-m-Y H:i:s', strtotime($banner->updated_at)) }}</td>
                    <td>
                        <a href="{{ url('backend/banners/delete/' . $banner->id) }}"
                           onclick="return confirm('Bạn có muốn xóa hay ko?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div style="text-align: center">
            {{ $banners->links() }}
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
