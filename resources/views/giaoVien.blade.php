@extends('layout')
@section('data')
    <h1 class="text-center">{{ isset($gv->id)?'Sửa thông tin cán bộ giáo viên':'Thêm mới cán bộ giáo viên'}}</h1>
    <p></p>
    <form method="post" action="" enctype="multipart/form-gv">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" required placeholder="Nhập họ và tên"
                           value="{{ isset($gv->name)?$gv->name:''}}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Ngày sinh:</label>
                    <input type="date" name="birthDay" class="form-control" required
                           value="{{ isset($gv->birthDay) ? $gv->birthDay : ''}}">
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" class="form-control" required placeholder="Nhập địa chỉ"
                           value="{{ isset($gv->address) ? $gv->address : ''}}">
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Lương cứng:</label>
                    <input type="number" name="luongCung" class="form-control" required placeholder="Nhập lương cứng"
                           value="{{ isset($gv->luongCung) ? $gv->luongCung : ''}}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>Lương thưởng:</label>
                    <input type="number" name="luongThuong" class="form-control" required
                           placeholder="Nhập lương thưởng"
                           value="{{ isset($gv->luongThuong) ? $gv->luongThuong : ''}}">
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Lương phạt:</label>
                    <input type="number" name="luongPhat" class="form-control" required placeholder="Nhập lương phạt"
                           value="{{ isset($gv->luongPhat) ? $gv->luongPhat : ''}}">
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3 text-left">
                <a href="{{url('gv')}}" class="btn-primary btn-lg"><i class="fa fa-arrow-left"></i> Quay
                    lại</a>
            </div>
            <div class="col-lg-3 text-right">
                <input type="submit" value="{{ isset($gv->id)?'Sửa':'Thêm mới'}}" class="btn-success btn-lg">
            </div>
            <div class="col-lg-3"></div>
        </div>
    </form>
@endsection
