<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $guarded = [];

    public function artisans() {
        return $this->belongsToMany(Artisan::class);
    }
}
