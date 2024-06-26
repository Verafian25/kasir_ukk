<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LaporanPenjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $detailTable = 'detail_penjualan';
    protected $produkTable = 'produk';
    protected $pelangganTable = 'pelanggan';

    public function getData($request)
    {
        $tahun = $request->tahun;
        $bulan = $request->bulan;

        $query = DB::table($this->detailTable . ' AS d')
            ->select(
                'd.id',
                'j.kode_penjualan',
                'j.tanggal',
                'p.nama AS nama_produk',
                'e.nama AS nama_pelanggan',
                'p.harga',
                'd.jumlah',
                'd.subtotal'
            )
            ->join($this->table . ' AS j', 'j.id', 'd.penjualan_id')
            ->join($this->produkTable . ' AS p', 'p.id', 'd.produk_id')
            ->leftJoin($this->pelangganTable . ' AS e', 'e.id', 'j.pelanggan_id')
            ->whereRaw("YEAR(j.tanggal) = $tahun")
            ->whereRaw("MONTH(j.tanggal) = $bulan");

        return $query->get();
    }
}
