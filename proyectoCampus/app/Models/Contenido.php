<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Contenido extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function user(): BelongsToMany
    {
        return $this->BelongsToMany(User::class);;
    }
}
