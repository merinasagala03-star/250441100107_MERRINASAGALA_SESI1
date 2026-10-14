<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 

class Pesanan extends Model
{
    protected $fillable = [ 
        'kode_layanan', 'nama_layanan', 'jenis', 'tarif_per_satuan', 
 'tanggal_dibuka', 
    ];
}
