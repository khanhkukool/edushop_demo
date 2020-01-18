@extends('backend.layouts.main')
@section('title','Bills')
@section('content')

        <!-- Main content -->
        <section class="content">
            <h1>Danh sách hóa đơn</h1>
            <a href="{{ url('/backend/bills/create') }}" class="btn btn-primary">
                Thêm mới
            </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>ID user</th>
                    <th>ID product</th>
                    <th>Total</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th></th>
                </tr>
                @foreach($bills AS $bill)
                    <tr>
                        <td>{{ $bill->id }}</td>
                        <td>{{ $bill->user_id }}</td>
                        <td>{{ $bill->product_id }}</td>
                        <td>{{ $bill->total }}</td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($bill->created_at)) }}</td>
                        <td>{{  date('d-m-Y H:i:s', strtotime($bill->updated_at)) }}</td>
                        <td>
                            <a href="{{ url('backend/bills/delete/' . $bill->id) }}"
                               onclick="return confirm('Bạn có muốn xóa hay ko?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
        <div style="text-align: center;">
            {{ $bills->links() }}
        </div>
        <!-- /.content -->
    </div>
@endsection
