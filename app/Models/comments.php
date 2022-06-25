<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    public function produit()
    {
        return $this->belongsTo(Produits::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
