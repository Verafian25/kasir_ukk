<h1>Struk</h1>
<a href="{{ route('penjualan.index') }}" class="btn btn-primary float-right">Kembali</a>
<button onclick="window.print()">Cetak Struk</button>
<table border="1">
    @php
        $total = 0;
    @endphp
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_struk as $item)
            @php
                $total += (float) $item->subtotal;
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->harga_produk }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->subtotal }}</td>
            </tr>
        @endforeach
        <td colspan="4">Total</td>
        <td>{{ $total }}</td>
        <tr>

            <td colspan="4">Bayar</td>
            <td>{{ $bayar }}</td>
        </tr>
        <tr>

            <td colspan="4">Kembalian</td>
            <td>{{ $kembalian }}</td>
        </tr>

    </tbody>
    <tfoot>
    </tfoot>
</table>
