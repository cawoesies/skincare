<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    // Ganti nama tabel menjadi 'pesan' (bukan 'pesans')
    protected $table = 'pesan';

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
        'jumlah',
        'ongkir',
        'metode_pengiriman',
        'metode_pembayaran',
        'total',
        'product_id'
    ];

    protected $casts = [
        'jumlah' => 'integer',
        'ongkir' => 'integer',
        'total' => 'integer',
        'product_id' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}