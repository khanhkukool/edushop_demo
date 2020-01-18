@extends('backend.layouts.main')
@section('title', 'Create user')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Thêm mới thành viên</h1>
            <form method="post" action="{{ url('backend/users/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="{{ old('username') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input type="file" name="avatar" value="{{ old('avatar') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Job</label>
                    <input type="text" name="job" value="{{ old('job') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebook" value="{{ old('facebook') }}" class="form-control" />
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
                    <label>Status</label>
                    <select name="status">
                        <option {{ $selected_active }} value="1">Active</option>
                        <option {{ $selected_disabled }} value="0">Disabled</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Lưu" />
                    <a class="btn btn-secondary" href="{{ url('/backend/users/index') }}">
                        Quay lại
                    </a>
                </div>
            </form>

        </section>
        <!-- /.content -->
    </div>
@endsection
