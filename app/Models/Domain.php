<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'description',
        'picture',
    ];


    
    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }

    public function artisanDomains()
    {
        return $this->hasMany(ArtisanDomain::class);
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