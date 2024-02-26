<?php

namespace App\Http\Controllers;

use App\Models\Competance;
use App\Models\Domain;
use App\Models\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    public function domain(){

        $domains = Domain::all(); // Replace this with your actual query to get domains from the database
        return view('artisan.artisanDomain', compact('domains'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $artisan = Auth::guard('artisan')->user();

    $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
    ]);
    Domain::create($validatedData);
    // $domain = new Domain([
    //     'nom' => $validatedData['nom'],
    //     'description' => $validatedData['description'],
    // ]);

    // $domain->save();

    // $competances = $validatedData['competances'];

    // foreach ($competances as $competance) {
    //     $competance = new Competance([
    //         'name' => $competance,
    //         'domain_id' => $domain->id,
    //     ]);

    //     $competance->save();
    // }

    // $request->file('domain_photo')->store('public/domain_photos');

    // return response()->json(['message' => 'Data saved successfully']);
    return redirect('/domainDashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $domain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domain $domain)
    {
        //
    }
}