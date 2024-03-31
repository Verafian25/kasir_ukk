@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action=" {{ route('pelanggan.create') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control"
                            placeholder="Masukkan Alamat" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No hp</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control"
                            placeholder="Masukkan No hp" required>
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $item->nama }}</td>
                                <td> {{ $item->alamat }}</td>
                                <td> {{ $item->nomor_telepon }}</td>
                                <td>
                                    <a href=" {{ route('pelanggan.edit', ['id' => $item->id]) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <a href=" {{ route('pelanggan.delete', ['id' => $item->id]) }}" class="btn btn-danger">
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
