@extends('layout.beli')

@section('content')
<div style="text-align: center; padding: 60px;">
    <h1 style="color: #E91E63;">Terima kasih!</h1>
    <p>Pesanan Anda telah berhasil diproses.</p>
    <a href="{{ route('beli') }}" style="margin-top: 30px; display: inline-block; padding: 10px 20px; background-color: #E91E63; color: white; border-radius: 20px; text-decoration: none;">Kembali ke Produk</a>
</div>
@endsection
