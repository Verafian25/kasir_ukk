<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    public function readData()
    {
        $data = DB::select('SELECT * FROM produk');
        return $data;
    }

    public function createData($request)
    {
        $kode_produk = $request->kode_produk;
        $nama = $request->nama;
        $stok = $request->stok;
        $harga = $request->harga;

        DB::insert("INSERT INTO produk (kode_produk,nama,stok,harga) VALUES ('$kode_produk','$nama',$stok,$harga)");
    }

    public function editData($id)
    {
        $data = DB::select("SELECT * FROM produk WHERE id = $id LIMIT 1");
        return $data[0];
    }

    public function updateData($request)
    {
        $id = $request->id;
        $kode_produk = $request->kode_produk;
        $nama = $request->nama;
        $stok = $request->stok;
        $harga = $request->harga;

        DB::update("UPDATE produk SET kode_produk = '$kode_produk', nama = '$nama', stok = $stok, harga = $harga WHERE id = $id");
    }

    public function checkData($id)
    {
        $check = DB::select("SELECT * FROM produk WHERE id = $id LIMIT 1");

        if (isset($check)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteData($id)
    {
        return DB::delete("DELETE FROM produk WHERE id = ?", [$id]);
    }
}
