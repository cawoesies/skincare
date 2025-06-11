<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Product;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesanans = Pesan::with('product')->get();
        return view('auth.index', compact('pesanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jumlah' => 'required|integer|min:1|max:10',
            'ongkir' => 'required|integer',
            'metode_pengiriman' => 'required|string',
            'metode_pembayaran' => 'required|string',
            'total' => 'required|integer',
            'product_id' => 'required|exists:products,id',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'telepon.required' => 'Nomor telepon wajib diisi',
            'alamat.required' => 'Alamat lengkap wajib diisi',
            'jumlah.required' => 'Jumlah produk wajib dipilih',
            'jumlah.min' => 'Jumlah minimal 1',
            'product_id.exists' => 'Produk tidak ditemukan',
        ]);

        try {
            Pesan::create($request->all());

            return redirect()->back()->with('success', 'Pesanan berhasil dikirim! Kami akan menghubungi Anda segera.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $pesan = Pesan::findOrFail($id);
            $pesan->delete();

            return redirect()->back()->with('success', 'Pesanan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus pesanan: ' . $e->getMessage());
        }
    }
}
