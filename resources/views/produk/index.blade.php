@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action=" {{ route('produk.create') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Kode Produk</label>
                        <input type="text" name="kode_produk" id="kode_produk" class="form-control"
                            placeholder="Masukkan kode produk" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="stok" name="stok" id="stok" class="form-control" placeholder="Masukkan stok"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control"
                            placeholder="Masukkan Harga" required>
                    </div>


                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

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
                            <th>Action</th>
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
                                <td>
                                    <a href=" {{ route('produk.edit', ['id' => $item->id]) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <a href=" {{ route('produk.delete', ['id' => $item->id]) }}" class="btn btn-danger">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
