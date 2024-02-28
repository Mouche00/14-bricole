<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\ArtisanDomain;
use App\Models\Domain;
use App\Models\TempDomain;
use Illuminate\Http\Request;

class TempDomainController extends Controller
{
    public function accepterDemande($id){
        $domainae = TempDomain::findOrFail($id);
        $domain = Domain::findOrFail($domainae->domain->id);
        $artisan = Artisan::findOrFail($domainae->artisan->id);
       
        ArtisanDomain::create([
            'artisan_id'=> $artisan->id,
            'domain_id'=> $domain->id
        ]);
        $domainae->delete();
        return redirect('/requestsDashboard');
    }
    public function refuserDemande($id){
        $domainae = TempDomain::findOrFail($id);
        $domainae->delete();
        return redirect('/requestsDashboard');
    }
}