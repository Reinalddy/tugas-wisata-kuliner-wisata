<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Culinary extends Model
{
    use HasFactory;

    protected $table = 'culinarys';
    protected $fillable = [
        'name',
        'desc',
        'image_path'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'uploaded_by','id');
    }
}
