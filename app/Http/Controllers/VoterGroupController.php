<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\VoterGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoterGroupController extends Controller
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
    public function store(Request $request, $voterData, $grpData, $orgID)
    {
        $userId = Auth::id();
        $voterGroup = [];

        //INSERT VOTER ELECTION table
        //check if voters field has any data
        $voterGroupIdField = $request->input('fw-voter-group-id');
        $count = count(array_filter($voterGroupIdField,function ($a) { return $a !== null;}));

        if ($count != 0)
        {

            //get votergroup id that was assigned and created for this using id_tag
            $voter['grp_id_tag'] = $request->input('fw-voter-group-id');

            //loop through the input array data and store into database
            for($i=0; $i < count($request->input('fw-voter-email-address')) ; $i++)
            {

                //group id, to assign to votergroup table
                   $groupId = Group::where('grp_id_tag',$voter['grp_id_tag'][$i])
                                    ->where('user_id', $userId)
                                        ->where('organization_id', $orgID)
                                            ->value('id');




                    //create record in table databse
                    $voterGroup = VoterGroup::create([
                        'voter_id' => $voterData[$i]['id'],
                        'group_id' => $groupId,
                    ]);

            }


        }
        else
        {
            //else store a default
            //loop through the input array data and store into database
            for($i=0; $i < count($request->input('fw-voter-email-address')) ; $i++)
            {

                    //create record in table databse
                    $voterGroup = VoterGroup::create([
                        'voter_id' => $voterData[$i]['id'],
                        'group_id' => 1, //default group
                    ]);

            }

        }

        return $voterGroup;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VoterGroup  $voterGroup
     * @return \Illuminate\Http\Response
     */
    public function show(VoterGroup $voterGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VoterGroup  $voterGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(VoterGroup $voterGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VoterGroup  $voterGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoterGroup $voterGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VoterGroup  $voterGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoterGroup $voterGroup)
    {
        //
    }

}
