<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }

    protected $fillable = [
        'title',
        'description',
        'artisan_id',
    ];

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }

    public function artisans() {
        return $this->belongsToMany(Artisan::class)->using(ArtisanDomain::class);
    }

    public function competances() {
        return $this->hasMany(Competance::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}