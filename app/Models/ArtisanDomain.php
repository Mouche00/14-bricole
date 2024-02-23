<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ArtisanDomain extends Pivot
{
    use HasFactory;

    public function artisan() {
        return $this->belongsTo(Artisan::class);
    }

    public function domain() {
        return $this->belongsTo(Domain::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
