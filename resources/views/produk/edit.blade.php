@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action=" {{ route('produk.update') }}" method="POST">

                    @csrf

                    <input type="text" name="id" id="id" value="{{ $data->id }}" hidden>
                    <div class="mb-3">
                        <label class="form-label">Kode Produk</label>
                        <input type="text" name="kode_produk" id="kode_produk" class="form-control"
                            value="{{ $data->kode_produk }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="stok" name="stok" id="stok" class="form-control" value="{{ $data->stok }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" value="{{ $data->harga }}"
                            required>
                    </div>


                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
