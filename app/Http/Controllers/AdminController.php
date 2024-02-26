<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Competance;
use App\Models\Domain;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.adminDashboard');
    }

    public function users(){
        return view('admin.usersDashboard');
    }

    public function domain(){
        $domains = Domain::all();
        return view('admin.domainDashboard',[
            'domains'=> $domains
        ]);
    }
    public function domainpage($id){
        $domain = Domain::findOrFail($id);
        $competences = Competance::where('domain_id',$id)->get();
        return view('admin.domainPage',[
            'competences'=> $competences,
            'domain'=> $domain
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}