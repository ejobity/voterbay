<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Voter;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class VoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        $voters =  Voter::getVotersForElection($user);

        $groups =  Group::getGroupsForElection($user);

        return view('admin.voters.index-voters',
        compact('voters', 'groups'));
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
    public function store(Request $request, $orgID, $electionID, $grpData, )
    {
        $voterData = [];
        $userId = Auth::id();

        //INSERT VOTERS
         //check if voters field has any data
         if ($request->has('fw-voter-email-address'))
         {
             //gets voters from voter table
             //and stores it into field array data
             $voter['email'] = $request->input('fw-voter-email-address');
             //get votergroup id that was assigned and created for this using id_tag
             $voter['grp_id_tag'] = $request->input('fw-voter-group-id');

             //loop through the input array data and store into database
             for($i=0; $i <= count($request->input('fw-voter-email-address')) - 1; $i++)
             {

                    if($voter['grp_id_tag'][$i] != null)
                    {

                        //group id, to assign to votergroup table
                        $groupId = Group::where('grp_id_tag',$voter['grp_id_tag'][$i])
                        ->where('user_id', $userId)
                            ->where('organization_id', $orgID)
                                ->where('election_id', $electionID)
                                    ->value('id');

                        //store record in array
                        $voterData[] = Voter::create([
                            'organization_id' => $orgID,
                            'email' => $voter['email'][$i],
                            'user_id' => $userId,
                            'group_id' => $groupId,
                            'election_id' => $electionID,
                        ]);
                    }
                    else
                    {
                        //store record in array
                        $voterData[] = Voter::create([
                            'organization_id' => $orgID,
                            'email' => $voter['email'][$i],
                            'user_id' => $userId,
                            'election_id' => $electionID,
                            'group_id' => 1, //default group,
                        ]);
                    }

             }

             return $voterData;

         }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVoterSingle(Request $request)
    {
        $user = User::find(Auth::id());

        $organization = Organization::getOrganizationForElection($user);

        /*

        $validation = Validator::make($request->all(), []);

         if($validation->fails()) {
            Alert::error('Error Adding Voters', '');
            return redirect('/admin/voters');
        }
        */

        $voter['email'] = $request->input('email');
        $voter['group_id'] = $request->input('group_id');

        //loop through the input array data and store into database
        for($i=0; $i <= count($request->input('email')) - 1; $i++)
        {
            $create = Voter::create(array(
                'email' => $voter['email'][$i],
                'user_id' => $user->id,
                'group_id' => $voter['group_id'][$i],
                'election_id' => $user->election_selection,
                'organization_id' => $organization->id,
            ));
        }
        Alert::success('Success', 'Voter(s) added successfully');
        return redirect()->route('voter.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
        // This will save to the database
        $voter->update([
            'email' => $request->email,
            'group_id' => $request->group_id
        ]);

        Alert::success('Update', 'Voter Updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        $voter->delete();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroyMany($voter)
    {
        $voter->delete();
        return back();
    }
}
