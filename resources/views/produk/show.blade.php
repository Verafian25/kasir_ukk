@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kode Produk</th>
                            <th>Harga</th>
                            <th>stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $item->nama }}</td>
                                <td> {{ $item->kode_produk }}</td>
                                <td> {{ $item->harga }}</td>
                                <td> {{ $item->stok }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
