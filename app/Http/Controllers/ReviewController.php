<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    public function reviewstore(Request $request, Artisan $artisan){

        $attributes = $request->validate([
            'note' => 'required',
            'commentaire' => 'required'
        ]);

        $attributes = array_merge($attributes, [
            'artisan_id' => $artisan->id
        ]);

        // $review = new Review;
        // $review->note = $request->note;
        // $review->commentaire = $request->commentaire;
        // $review->client_id = auth()->user()->client_id; 
        // $review->artisan_id = $request->artisan_id; 
        // $review->save();

        auth()->user()->client()->first()->reviews()->create($attributes);
        return redirect()->back()->with('success','Your review has been submitted Successfully,');
    }
}
  
