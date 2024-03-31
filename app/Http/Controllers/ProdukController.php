<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdukController extends Controller
{
    public function index(Produk $produk){
        $data = $produk->readData();
        return view('produk.index', compact('data'));
    }

    public function show(Produk $produk){
        $data = $produk->readData();
        return view('produk.show', compact('data'));
    }

    public function create(Request $request, Produk $produk){
        $produk->createData($request);
        return redirect()->route('produk.index');
    }

    public function edit($id, Produk $produk){
        $check = $produk->checkData($id);

        if ($check) {
            $data = $produk->editData($id);
            return view('produk.edit', compact('data'));
        } else {
            return "Data tidak ada";
        }
    }

    public function update(Request $request, Produk $produk){
        $check = $produk->checkData($request->id);

        if ($check) {
            $data = $produk->updateData($request);
            return redirect()->route('produk.index');
        } else {
            return "Data tidak ada";
        }
    }

    public function delete($id, Produk $produk){
        if ($produk->deleteData($id)) {
            return redirect()->route('produk.index');
        } else {
            return redirect()->route('produk.index');
        }
    }
}
