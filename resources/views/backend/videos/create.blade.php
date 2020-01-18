@extends('backend.layouts.main')
@section('title', 'Create categories')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới video</h1>
            <form method="post" action="{{ url('backend/videos/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>ID user</label>
                    <select name="user">
                        @foreach($users AS $user)
                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>ID product</label>
                    <select name="product">
                        @foreach($products AS $product)
                            <option value="{{ $product->id }}">{{ $product->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Video</label>
                    <input type="file" name="video" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/videos/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
