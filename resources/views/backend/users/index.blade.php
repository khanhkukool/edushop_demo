{{--@foreach($users AS $user)--}}
{{--    <?php--}}
{{--    DB::table('users')->where('id',$user->id)->update(['password' => md5($user->password)]);--}}
{{--    ?>--}}
{{--@endforeach--}}
@extends('backend.layouts.main')
@section('title','Users')
@section('content')
        <!-- Main content -->
        <section class="content">
            <h1>Danh sách thành viên</h1>
            <a href="{{ url('/backend/users/create') }}" class="btn btn-primary">
                Thêm mới
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Avatar</th>
                    <th>Job</th>
                    <th>Address</th>
                    <th>Facebook</th>
                    <th>Count products</th>
                    <th>Status</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th></th>
                </tr>
                @foreach($users AS $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ md5($user->password) }}</td>
                    <td>{{ ($user->email) }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>
                        <img src="{{ asset('/uploads/' . $user->avatar) }}" height="30px">
                    </td>
                    <td>{{ $user->job }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->facebook }}</td>
                    <td>{{ count($user->product) }}</td>
                    <td>
                        @php
                            $status_text = '';
                            switch ($user->status){
                                case 0: $status_text = "Active";
                                break;
                                case 1: $status_text = "Disabled";
                                break;
                            }
                            echo $status_text;
                        @endphp
                    </td>
                    <td>{{  date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
                    <td>{{  date('d-m-Y H:i:s', strtotime($user->updated_at)) }}</td>
                    <td>
                        <a href="{{ url('backend/users/show/' . $user->id) }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ url('backend/users/eidt/' . $user->id) }}">
                            <i class="fa fa-pencil-alt"></i> &nbsp;
                        </a>
                        <a href="{{ url('backend/users/delete/' . $user->id) }}"
                           onclick="return confirm('Bạn có muốn xóa hay ko?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </section>
        <div style="text-align: center;">
            {{ $users->links() }}
        </div>
        <!-- /.content -->
    </div>
@endsection
