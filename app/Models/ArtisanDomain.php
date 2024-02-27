<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ArtisanDomain extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'artisan_id',
        'domain_id',
    ];
    
    public function artisan() {
        return $this->belongsTo(Artisan::class);
    }

    public function domain() {
        return $this->belongsTo(Domain::class);
    }
}