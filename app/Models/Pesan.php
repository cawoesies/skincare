<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

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
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
