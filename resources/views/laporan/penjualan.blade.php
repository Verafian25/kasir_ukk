@extends('layout.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="m-0 font-weight-bold text-primary">Data Produk</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('laporan.penjualan.proces') }}" method="GET">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Tahun:</label>
                        <select name="tahun" class="form-control" id="tahun">
                            <option selected disabled>Pilih Tahun</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tahun:</label>
                        <select name="bulan" class="form-control" id="bulan">
                            <option selected disabled>Pilih Bulan</option>
                            @foreach ($bulan as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="float-left mt-2">
                        <button type="submit" class="btn btn-md btn-primary">Cetak</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
