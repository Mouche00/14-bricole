<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'domain_id',
    ];

    public function domain() {
        return $this->belongsTo(Domain::class);
    }

    public function artisans() {
        return $this->belongToMany(Artisan::class);
    }
}