<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{

    public function store(Request $request, Artisan $artisan)
    {
        $attributes = $request->validate([
            'message' => 'required'
        ]);

        $attributes = array_merge($attributes, [
            'artisan_id' => $artisan->id
        ]);

        auth()->user()->client()->first()->reclamations()->create($attributes);

        return redirect()->route('client')->with('success', 'Reclamation sent successfully');
    }

}
