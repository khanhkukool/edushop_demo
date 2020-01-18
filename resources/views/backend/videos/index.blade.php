@extends('backend.layouts.main')
@section('title','Videos')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Danh sách video</h1>
            <a href="{{ url('/backend/videos/create') }}" class="btn btn-primary">
                Thêm mới
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>ID user</th>
                    <th>ID product</th>
                    <th>Video</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th></th>
                </tr>
                @foreach($videos AS $video)
                    <tr>
                        <td>{{ $video->id }}</td>
                        <td>{{ $video->user_id }}</td>
                        <td>{{ $video->product_id }}</td>
                        <td>
                            <img src="{{ asset('/uploads/' . $video->video) }}" height="50px">
                        </td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($video->created_at)) }}</td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($video->updated_at)) }}</td>
                        <td>
                            <a href="{{ url('backend/videos/delete/' . $video->id) }}"
                               onclick="return confirm('Bạn có muốn xóa hay ko?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </section>
        <div style="text-align: center;">
            {{ $videos->links() }}
        </div>
        <!-- /.content -->
    </div>
@endsection
