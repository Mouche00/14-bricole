<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\ArtisanDomain;
use App\Models\Competance;
use App\Models\Domain;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{

    public function dashboard(){
        return view('artisan.artisanDashboard');
    }

    public function services(){
        return view('artisan.artisanServices');
    }

    
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
//     public function addDomain(Request $request)
//     {

//     // Validate the request if needed

//     $domainName = $request->input('name');
//     $artisanId = $request->input('artisan_id');
//     // $description = $request->input('description');

//     // Insert into artisan_domain table
//     ArtisanDomain::create([
//         'domain_id' => $domain->id,
//         'artisan_id' => $artisanId,
//         // 'description' => $description,
//         // Add other fields as needed
//     ]);

//     return view('artisan.competances');
// }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Artisan $artisan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artisan $artisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artisan $artisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artisan $artisan)
    {
        //
    }
}
