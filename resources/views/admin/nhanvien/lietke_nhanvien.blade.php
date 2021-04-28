@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê nhân viên
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">Bulk action</option>
                <option value="1">Delete selected</option>
                <option value="2">Bulk edit</option>
                <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search">
                <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
            </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">

                {{-- Thông báo --}}
                <?php
                    $message = Session::get('message');
                    if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                    }
                ?>

                <thead><?php $i=1?>
                    <tr>
                    {{-- <th style="width:20px;">
                        <label class="i-checks m-b-none">
                        <input type="checkbox"><i></i>
                        </label>
                    </th> --}}
                    <th>STT</th>
                    <th>Tên nhân viên</th>
                    <th>Chức vụ</th>
                    <th>Nhà hàng</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tài Khoản</th>
                    <th style="width:30px;"></th>
                    </tr>
                </thead>

                @foreach ($lietke_nhanvien as $key => $nhanvien)

                <tbody>
                    <tr>
                    {{-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> --}}
                    <td>{{$i++}} </td>
                    <td>{{$nhanvien->TenNV}} </td>
                    <td>{{$nhanvien->TenCV}} </td>
                    <td>{{$nhanvien->TenNhaHang}} </td>
                    <td>{{$nhanvien->GioiTinhNV}} </td>
                    <td>{{$nhanvien->SdtNV}} </td>
                    <td>{{$nhanvien->DiaChiNV}} </td>
                    <td>{{$nhanvien->TaiKhoanNV}} </td>
                    <td>
                        <a href="{{URL::to('/sua-nhanvien/'.$nhanvien->IdNV)}}" class="active styling-edit" ui-toggle-class="">
                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                        </a>
                        <a onclick="return confirm('Bạn có chắc chắn xoá không?')" href="{{URL::to('/xoa-nhanvien/'.$nhanvien->IdNV)}}" class="active styling-delete" ui-toggle-class="">
                            <i class="fa fa-times text-danger text"></i>
                        </a>
                    </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>

        <footer class="panel-footer">
            <div class="row">

            <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 5 nhân viên</small>
            </div>
            {{-- <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div> --}}
            </div>
        </footer>
    </div>
</div>

@endsection