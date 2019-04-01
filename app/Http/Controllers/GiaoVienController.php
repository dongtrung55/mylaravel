<?php

namespace App\Http\Controllers;

use App\GiaoVien;
use Illuminate\Http\Request;
use DB;

class GiaoVienController extends Controller
{
    //list thong tin gv
    public function listGV()
    {
        $gv = new GiaoVien();
        $data["gv"] = $gv::all();
        //goiview truyen du lieu ra view
        return view("listGV", $data);
    }

    //add gv
    public function add(Request $request)
    {
        return view("giaoVien");
    }

    //do_edit gv
    public function do_add(Request $request)
    {
        $gv = new GiaoVien();
        $name = $request->get("name");
        $birthDay = $request->get("birthDay");
        $address = $request->get("address");
        $luongCung = $request->get("luongCung");
        $luongThuong = $request->get("luongThuong");
        $luongPhat = $request->get("luongPhat");
        $luongLinhThuc = $luongCung + $luongThuong - $luongPhat;

        $gv->insert(array("name" => $name, "birthDay" => $birthDay, "address" => $address, "luongCung" => $luongCung, "luongThuong" => $luongThuong, "luongThuong" => $luongThuong, "luongPhat" => $luongPhat, "luongLinhThuc" => $luongLinhThuc));

        //goi view,truyen du lieu ra view
        return redirect(url(''));
    }

    //edit gv
    public function edit(Request $request, $id)
    {
        $gv = new GiaoVien();
        //lay mot ban ghi tuong ung truyen vao
        $data["gv"] = $gv::find($id);
        //goi view,truyen du lieu ra view
        return view("giaovien", $data);
    }

    //do_edit gv
    public function do_edit(Request $request, $id)
    {
        $gv = new GiaoVien();
        $name = $request->get("name");
        $birthDay = $request->get("birthDay");
        $address = $request->get("address");
        $luongCung = $request->get("luongCung");
        $luongThuong = $request->get("luongThuong");
        $luongPhat = $request->get("luongPhat");
        $luongLinhThuc = $luongCung + $luongThuong - $luongPhat;

        $gv->where("id", "=", $id)->update(array("name" => $name, "birthDay" => $birthDay, "address" => $address, "luongCung" => $luongCung, "luongThuong" => $luongThuong, "luongThuong" => $luongThuong, "luongPhat" => $luongPhat, "luongLinhThuc" => $luongLinhThuc));
        return redirect(url(''));
    }

    public function delete(Request $request, $id)
    {
        $gv = new GiaoVien();
        //lay mot ban ghi tuong ung truyen vao
        $gv->where("id", $id)->delete();
        //goi view,truyen du lieu ra view
        return redirect(url(''));
    }
}
