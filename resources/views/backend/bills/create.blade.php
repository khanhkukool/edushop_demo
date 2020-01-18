@extends('backend.layouts.main')
@section('title', 'Bills')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới hóa đơn</h1>
            <form method="post" action="{{ url('backend/bills/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>User</label>
                    <select name="user_id">
                        @foreach($users AS $user)
                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Product</label>
                    <select name="product_id">
                        @foreach($products AS $product)
                            <option value="{{ $product->id }}">{{ $product->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/bills/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
