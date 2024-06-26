<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Pelanggan $pelanggan){
        $data = $pelanggan->readData();
        return view('pelanggan.index', compact('data'));
    }

    public function create(Request $request, Pelanggan $pelanggan){
        $pelanggan->createData($request);
        return redirect()->route('pelanggan.index');
    }

    public function edit($id, Pelanggan $pelanggan){
        $check = $pelanggan->checkData($id);

        if ($check) {
            $data = $pelanggan->editData($id);
            return view('pelanggan.edit', compact('data'));
        } else {
            return "Data tidak ada";
        }
    }

    public function update(Request $request, Pelanggan $pelanggan){
        $check = $pelanggan->checkData($request->id);

        if ($check) {
            $pelanggan->updateData($request);
            return redirect()->route('pelanggan.index');
        } else {
            return "Data tidak ada";
        }
    }


}
