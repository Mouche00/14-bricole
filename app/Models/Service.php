<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'tarif',
        'description'
    ];

    public function artisan() {
        return $this->belongsTo(Artisan::class);
    }

    public function reservations() {
        return $this->belongsToMany(Reservation::class);
    }
}
