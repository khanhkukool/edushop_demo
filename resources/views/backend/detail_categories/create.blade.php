@extends('backend.layouts.main')
@section('title', 'Create categories')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới chủ đề</h1>
            <form method="post" action="{{ url('backend/detail_categories/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select name="category">
                        @foreach($categories AS $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/detail_categories/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
