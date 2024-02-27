<?php

namespace App\Http\Controllers;

use App\Models\Competance;
use App\Models\Domain;
use App\Models\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    
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

        $attributes = $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
    ]);
    // dd(public_path('images/domains'));

        $fileName = time() . '.' . $request->picture->extension();
        // $request->picture->storeAs('public/images', $fileName);
        $request->picture->move(public_path('images/domains'),$fileName);
        $attributes = array_merge($attributes, ['picture' => $fileName]);

    Domain::create($attributes);
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
        dd('hey');
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
    public function destroy(string $id)
    {
        $domain= Domain::findOrFail($id);
 
        $domain->delete();
        return redirect('/domainDashboard');
    }
}