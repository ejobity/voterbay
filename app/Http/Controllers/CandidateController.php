<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        $candidates = Candidate::getCandidatesForElection($user);


        return view('admin.candidates.index-candidates',
        compact('candidates'));
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
    public static function store(Request $request, $orgID, $electionID)
    {

        $userId = Auth::id();
        $candidateData = [];

        //INSERT CANDIDATE
        //check if candidate name field has any data
        if ($request->has('fw-candidate-name'))
        {
            //get field array data
            $candidate['user_id'] = $userId;
            $candidate['name'] = $request->input('fw-candidate-name');
            $candidate['position'] = $request->input('fw-candidate-position');

            //loop through the input array data and store into database
            for($i=0; $i <= count($request->input('fw-candidate-name')) - 1; $i++)
            {

                //store image and store file path, if no image exist store fake image name
                if ($request->has('fw-candidate-image.'.$i))
                {
                    $image_path = $request->file('fw-candidate-image.'.$i)->store('candidate-images');
                }
                else
                {
                    $image_path = 'noimage.jpg';
                }

            //create record in table databse
            $candidateData[] = Candidate::create([
                    'name' => $candidate['name'][$i],
                    'position' => $candidate['position'][$i],
                    'image_path' => $image_path,
                    'user_id' => $userId,
                    'organization_id' => $orgID,
                    'election_id' => $electionID
                ]);

            }

            return $candidateData;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
