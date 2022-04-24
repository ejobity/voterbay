<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        $groups = Group::getGroupsForElection($user);

        return view('admin.groups.index-groups',
        compact('groups'));
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
    public function store(Request $request, $orgID, $electionID)
    {
        $grpData = [];

        //INSERT GROUPS
        //check if voters group field has any data
        $groupField = $request->input('fw-group-id');
        $count = count(array_filter($groupField,function ($a) { return $a !== null;}));

        if ($count != 0)
        {
            //get field array data
            $voterGrp['grp_id_tag'] = $request->input('fw-group-id');
            $voterGrp['grp_name'] = $request->input('fw-group-name');


            //loop through the input array data and store into database
            for($i=0; $i <= count($request->input('fw-group-id')) - 1; $i++)
            {

            //create record in table databse
            $grpData[] = Group::create([
                    //'voter_id' => $voterData[$i]['id'],
                    'user_id' => Auth::ID(),
                    'organization_id' => $orgID,
                    'election_id' => $electionID,
                    'grp_id_tag' => $voterGrp['grp_id_tag'][$i],
                    'grp_name' => $voterGrp['grp_name'][$i]
            ]);


            }

        }
        else
        {

            //else set default
            $grpData[] = Group::create([
                //'voter_id' => $voterData[$i]['id'],
                'user_id' => Auth::ID(),
                'organization_id' => $orgID,
                'election_id' => $electionID,
                'grp_id_tag' => '000',
                'grp_name' => 'Not Assigned'
            ]);

        }

        return $grpData;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
