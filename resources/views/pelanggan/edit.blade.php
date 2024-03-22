@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action=" {{ route('pelanggan.update') }}" method="POST">

                    @csrf

                    <input type="text" name="id" id="id" value="{{ $data->id }}" hidden>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $data->alamat }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No hp</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control"
                            value="{{ $data->nomor_telepon }}" required>
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
