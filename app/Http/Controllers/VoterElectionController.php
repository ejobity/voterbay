<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\VoterElection;
use Illuminate\Support\Facades\Auth;

class VoterElectionController extends Controller
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
    public function store(Request $request, $voterData, $election)
    {
        $userId = Auth::id();
        $voterElection = [];

        //INSERT VOTER ELECTION table
        //check if voters field has any data
        if ($request->has('fw-voter-email-address'))
        {


            //loop through the input array data and store into database
            for($i=0; $i < count($request->input('fw-voter-email-address')) ; $i++)
            {

                    //create record in table databse
                    $voterElection = VoterElection::create([
                        'voter_id' => $voterData[$i]['id'],
                        'election_id' => $election->id,
                    ]);

            }

            return $voterElection;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VoterElection  $voterElection
     * @return \Illuminate\Http\Response
     */
    public function show(VoterElection $voterElection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VoterElection  $voterElection
     * @return \Illuminate\Http\Response
     */
    public function edit(VoterElection $voterElection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VoterElection  $voterElection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoterElection $voterElection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VoterElection  $voterElection
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoterElection $voterElection)
    {
        //
    }
}
