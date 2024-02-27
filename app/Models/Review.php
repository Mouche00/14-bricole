<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artisan() {
        return $this->belongsTo(Artisan::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
