<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    use HasFactory;

    public function readData()
    {
        $data = DB::select("SELECT * FROM pelanggan");
        return $data;
    }

    public function createData($request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        $nomor_telepon = $request->nomor_telepon;

        DB::insert("INSERT INTO pelanggan (nama,alamat,nomor_telepon) VALUES ('$nama','$alamat',$nomor_telepon)");
    }

    public function editData($id)
    {
        $data = DB::select("SELECT * FROM pelanggan WHERE id = $id LIMIT 1");
        return $data[0];
    }

    public function updateData($request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $nomor_telepon = $request->nomor_telepon;

        DB::update("UPDATE pelanggan SET nama = '$nama', alamat = '$alamat', nomor_telepon = $nomor_telepon WHERE id = $id");
    }

    public function checkData($id)
    {
        $check = DB::select("SELECT * FROM pelanggan WHERE id = $id LIMIT 1");

        if (isset($check)) {
            return true;
        } else {
            return false;
        }
    }
}
