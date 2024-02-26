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

    public function domain(){

        $domains = Domain::all(); // Replace this with your actual query to get domains from the database
        return view('artisan.artisanDomain', compact('domains'));
    }


    public function competances(){
        $competances = Competance::all();

        return view('artisan.artisanCompetances', compact('competances'));
    }

    
   
    /**
     * Display a listing of the resource.
     */
    public function addCompetance(Request $request)
    {
        $request->validate([
            'competance_id' => 'required|array',
            'artisan_id' => 'required|exists:artisans,id', 
        ]);
    
        $competances = $request->input('competance_id');
        $artisanId = $request->input('artisan_id');
    
       $artisan = Artisan::find($artisanId);
       $artisan->competances()->sync($competances);

    
        return redirect()->route('services');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addDomain(Request $request)
    {
        $request->validate([
            'domain_id' => 'required|array',
            'domain_id.*' => 'exists:domains,id', // Ensure each domain_id exists in the domains table
            'artisan_id' => 'required|exists:artisans,id', // Assuming your artisans table has an 'id' field
        ]);
    
        $artisanId = $request->input('artisan_id');
    
        $domainIds = $request->input('domain_id');
    
        $artisan = Artisan::find($artisanId);
        $artisan->domains()->sync($domainIds);
        return redirect()->route('competances');
   
    }

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
