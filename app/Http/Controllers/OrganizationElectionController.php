<?php

namespace App\Http\Controllers;

use App\Models\OrganizationElection;
use Illuminate\Http\Request;

class OrganizationElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $orgData, $election)
    {
        $organizationElectionData = [];

            //create record in table databse
            $organizationElectionData = OrganizationElection::create([
                'organization_id' => $orgData->id,
                'election_id' => $election->id,
            ]);

        return $organizationElectionData;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrganizationElection  $organizationElection
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationElection $organizationElection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrganizationElection  $organizationElection
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationElection $organizationElection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrganizationElection  $organizationElection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrganizationElection $organizationElection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrganizationElection  $organizationElection
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationElection $organizationElection)
    {
        //
    }
}
