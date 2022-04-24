<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateElection;
use Illuminate\Support\Facades\Auth;

class CandidateElectionController extends Controller
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
    public function store(Request $request, $candidateData, $election)
    {
        $CandidateElectionData = [];

        //INSERT CANDIDATE ELECTION table
        //check if voters field has any data
        if ($request->has('fw-candidate-name'))
        {

            //loop through the input array data and store into database
            for($i=0; $i < count(request()->input('fw-candidate-name')) ; $i++)
            {

            //create record in table databse
            $CandidateElectionData = CandidateElection::create([
                'candidate_id' => $candidateData[$i]['id'],
                'election_id' => $election->id,
            ]);


            }

            return $CandidateElectionData;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CandidateElection  $candidateElection
     * @return \Illuminate\Http\Response
     */
    public function show(CandidateElection $candidateElection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidateElection  $candidateElection
     * @return \Illuminate\Http\Response
     */
    public function edit(CandidateElection $candidateElection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidateElection  $candidateElection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CandidateElection $candidateElection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidateElection  $candidateElection
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidateElection $candidateElection)
    {
        //
    }
}
