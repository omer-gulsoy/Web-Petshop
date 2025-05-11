<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tablonun adı (Laravel'in varsayılan adlandırma kuralı kullanıldığı için burada yazmamıza gerek yok)
    protected $table = 'products';

    // Doldurulabilir alanlar
    protected $fillable = ['name', 'description', 'price', 'stock', 'status', 'image'];
}
