<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    public function reviewstore(Request $request){
        $review = new Review;
        $review->note = $request->note;
        $review->commentaire = $request->commentaire;
        $review->client_id = auth()->user()->client_id; 
        $review->artisan_id = $request->artisan_id; 
        $review->save();
        return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
    }
}
  
