@extends('backend.layouts.main')
@section('title', 'Create banner')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới danh mục</h1>
            <form method="post" action="{{ url('backend/banners/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Ảnh banner</label>
                    <input type="file" name="path" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/banners/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
