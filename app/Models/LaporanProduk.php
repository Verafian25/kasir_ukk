<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanProduk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    public function getData($request)
    {
        $tahun = $request->tahun;
        $bulan = $request->bulan;

        $query = DB::table($this->table)
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->get();

        return $query;
    }
}
