<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = ['url', "description", "categoria_id"];

     public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
}
