<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Group;
use App\Models\Voter;
use App\Models\Election;
use App\Models\Candidate;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\VoterElection;
use App\Models\CandidateElection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        $elections = new Election;

        $elections = $elections->electionAndOrganization();

        return view('admin.elections.index-elections',
        compact('elections', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-election');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = Auth::id();
        $img_path = "";
        $voterData = [];
        $candidateData = [];
        $grpData = [];
        $plan = request()->input('btnRadioPlan');

        //INSERT ELECTION table
        $election = Election::create([
            'user_id' => $userId,
            'plan_id' => $plan,
            'event_name' => request()->input('fw-event-name'),
            'type' => request()->input('btnRadioElectionType'),
            'start_date' => request()->input('fw-event-start-date'),
            'end_date' => request()->input('fw-event-end-date'),
            'start_time' => date("H:i:s", strtotime(request()->input('fw-event-start-time'))),
            'end_time' => date("H:i:s", strtotime(request()->input('fw-event-end-time')))
        ]);

        User::where('id',$userId)
            ->update([
                'election_selection' => $election->id
            ]);

        //INSERT ORGANIZATION
        $oc = new OrganizationController();
        $orgData = $oc->store($request);

        //INSERT CANDIDATE
        $cc = new CandidateController();
        $candidateData = $cc->store($request, $orgData->id, $election->id);

        //Create first default group for this election
        Group::create([
            'user_id' => $userId ,
            'organization_id' => $orgData->id,
            'election_id' => $election->id,
            'grp_id_tag' => '000',
            'grp_name' => 'Not Assigned'
        ]);

        //INSERT GROUP
        $gc = new GroupController();
        $grpData = $gc->store($request, $orgData->id, $election->id);

        //INSERT VOTER
        $vc = new VoterController();
        $voterData  = $vc->store($request, $orgData->id, $election->id, $grpData);

        //INSERT VOTERGROUP - Depracated
        /* $vgc = new VoterGroupController();
        $voterGroupData = $vgc->store($request, $voterData, $grpData, $orgData->id); */

        //INSERT VOTER ELECTION table
        $vec = new VoterElectionController();
        $voterElectionData  = $vec->store($request, $voterData, $election);

        //INSERT CANDIDATE ELECTION table
        $cec = new CandidateElectionController();
        $candidateElectionData  = $cec->store($request, $candidateData, $election);

        //INSERT ORGANIZATION ELECTION table
        $oec = new OrganizationElectionController();
        $organizationElectionData  = $oec->store($request, $orgData, $election);

        Alert::success('Congratulations', 'Election created successfully');
        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(Election $election)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function edit(Election $election)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Election $election)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function destroy(Election $election)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectIndex(Request $request, $selection)
    {

        //if election on select-list-dropdown is /select
        //do the following command
        //else if a number is sent like from index-election
        //do the following command
        if($selection == 'select')
        {
            $selection = $request->input('election_selection');
        }

        User::where('id',Auth::id())
        ->update([
            'election_selection' => $selection
        ]);

        $electionName = Election::where('id',$selection)->pluck('event_name')->first();

        Alert::toast($electionName.' election loaded successfully', 'info');

        return back();

    }
}
