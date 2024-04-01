<h1>Bulan {{ $bulan }} Tahun {{ $tahun }} </h1>
<button onclick="window.print()">Cetak Laporan</button>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->kode_produk }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->harga }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
