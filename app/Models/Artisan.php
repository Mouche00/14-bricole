<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id'
    ];

    protected $casts = [
        'images' => 'array'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function artisanDomains()
    {
        return $this->hasMany(ArtisanDomain::class);
    }
    
    public function domains() {
        return $this->belongsToMany(Domain::class)->using(ArtisanDomain::class);
    }

    public function competances() {
        return $this->belongsToMany(Competance::class);
    }

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function tempdomains() {
        return $this->hasMany(TempDomain::class);
    }
}