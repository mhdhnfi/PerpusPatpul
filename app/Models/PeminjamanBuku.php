<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PeminjamanBuku extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'buku_id', 'status'];

    
    /**
     * Get the user that owns the PeminjamanBuku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the book that is being borrowed
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}
