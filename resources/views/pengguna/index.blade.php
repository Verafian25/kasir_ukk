@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action=" {{ route('pengguna.create') }}" method="POST">

                    @csrf


                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="Masukkan Username" required>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Masukkan password" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Level</label>
                        <select name="level" id="level" class="form-control">
                            <option selected disabled>-- Pilih Level --</option>
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $item->nama }}</td>
                                <td> {{ $item->username }}</td>
                                <td> {{ $item->password }}</td>
                                <td> {{ $item->level }}</td>
                                <td>
                                    <a href=" {{ route('pengguna.edit', ['id' => $item->id]) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    <a href=" {{ route('pengguna.delete', ['id' => $item->id]) }}" class="btn btn-danger">
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
