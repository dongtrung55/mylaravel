<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    //khai bao table de thao tac
    public $table = "tblcbgv";
    //khai bao de  laravel hiểu là không có 2 cột là create_at và update_at
    public $timestamps = true;
    //Lấy ra các cột cần sử dụng
    public $fillable = ['id','name','birthDay','address','luongCung','luongThuong','luongPhat','luongLinhThuc'];
}
