<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tours extends Model
{
    use HasFactory;
    protected $table = 'tours';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'uploaded_by','id');
    }
}
