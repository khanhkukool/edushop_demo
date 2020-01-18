@extends('backend.layouts.main')
@section('title', 'Create categories')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới danh mục</h1>
            <form method="post" action="{{ url('backend/categories/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="name" class="form-control" />
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
                    <label>Trạng thái</label>
                    <select name="status">
                        <option {{ $selected_active }} value="1">Active</option>
                        <option {{ $selected_disabled }} value="0">Disabled</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/categories/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
