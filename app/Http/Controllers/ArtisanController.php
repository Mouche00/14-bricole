<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\ArtisanDomain;
use App\Models\Competance;
use App\Models\TempDomain;
use App\Models\Service; 
use App\Models\Domain;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{

    public function dashboard(){
    }

    public function services(){
        return view('artisan.artisanServices');
    }


    public function addServices(Request $request){
        $request->validate([
            'nom.*' => 'required|string',
            'tarif.*' => 'required|string',
        ]);
        
   
        $artisanId = auth()->user()->artisan->id;
    
        $noms = $request->input('nom');
        $tarifs = $request->input('tarif');
    
        foreach ($noms as $key => $nom) {
            $tarif = $tarifs[$key];
            
            $service = new Service();
    
            $service->nom = $nom;
            $service->tarif = $tarif;
            $service->artisan_id = $artisanId; 
    
            $service->save();
        }
    
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
            'competance_ids' => 'required|array',
            'artisan_id' => 'required|exists:artisans,id', 
        ]);
    
        $competanceIds = $request->input('competance_ids');
        $artisanId = $request->input('artisan_id');
    
        $artisan = Artisan::find($artisanId);
    
        // Use attach to append competences without removing existing ones
        foreach ($competanceIds as $competanceId) {
            // Check if the competence is not already attached
            if (!$artisan->competances()->where('competance_id', $competanceId)->exists()) {
                $artisan->competances()->attach($competanceId);
            }
        }
    
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
    
        // Use sync without detaching to append domains without removing existing ones
        foreach ($domainIds as $domainId) {
            $tempDomain = TempDomain::firstOrCreate([
                'artisan_id' => $artisanId,
                'domain_id' => $domainId,
            ]);
        }
    
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
