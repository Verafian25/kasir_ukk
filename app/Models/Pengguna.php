<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengguna extends Model
{
    use HasFactory;

    public function readData()
    {
        $data = DB::select("SELECT * FROM user");
        return $data;
    }

    public function createData($request)
    {
        $username  = $request->username;
        $password  = md5($request->password);
        $nama  = $request->nama;

        DB::insert("INSERT INTO user (username,password,nama) VALUES ('$username','$password','$nama')");
    }

    public function editData($id)
    {
        $data = DB::select("SELECT * FROM user WHERE id = $id LIMIT 1");
        return $data[0];
    }

    public function updateData($request)
    {
        $id = $request->id;
        $username  = $request->username;
        $password  = md5($request->password);
        $nama  = $request->nama;

        DB::update("UPDATE user SET username = '$username', password = '$password', nama = '$nama' WHERE id = $id");
    }

    public function checkData($id)
    {
        $check = DB::select("SELECT * FROM user WHERE id = $id LIMIT 1");

        if (isset($check)) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteData($id)
    {
        return DB::delete("DELETE FROM user WHERE id = ?", [$id]);
    }
}
