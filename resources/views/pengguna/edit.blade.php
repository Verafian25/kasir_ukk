@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action=" {{ route('pengguna.update') }}" method="POST">

                    @csrf

                    <input type="text" name="id" id="id" value="{{ $data->id }}" hidden>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            value="{{ $data->username }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Masukkan Password" required>
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
