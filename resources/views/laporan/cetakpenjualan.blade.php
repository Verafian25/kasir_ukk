<h1>Bulan {{ $bulan }} Tahun {{ $tahun }} </h1>
<button onclick="window.print()">Cetak Laporan</button>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Nota</th>
            <th>Tanggal</th>
            <th>Nama Produk</th>
            <th>Nama Pelanggan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @if (count($data) > 0)
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_penjualan }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->nama_pelanggan ?? 'Umum' }}</td>
                    <td>Rp {{ $item->harga }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>Rp {{ $item->subtotal }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6">Total</td>
                <td>{{ $jumlah }}</td>
                <td>Rp {{ $total }}</td>
            </tr>
        @else
            <tr>
                <td colspan="8">Tidak ada penjualan.</td>
            </tr>
        @endif
    </tbody>
</table>
