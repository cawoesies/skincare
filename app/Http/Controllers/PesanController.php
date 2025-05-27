<?php
namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Product;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
            'jumlah' => 'required|integer|min:1',
            'ongkir' => 'required|integer',
            'metode_pengiriman' => 'required',
            'metode_pembayaran' => 'required',
            'total' => 'required|integer',
            'product_id' => 'required|exists:products,id',
        ]);

        Pesan::create($request->all());

        return redirect()->back()->with('success', 'Pesanan berhasil dikirim!');
    }
}
