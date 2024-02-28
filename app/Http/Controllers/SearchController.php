<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function searchResults()
    {
        return view('client.searchResults');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $services = Service::where('nom', 'like', '%' . $query . '%')
            ->get();

        $domains = Domain::where('nom', 'like', '%' . $query . '%')
            ->get();

        return view('client.searchResults', compact('services', 'domains'));
    }
}
