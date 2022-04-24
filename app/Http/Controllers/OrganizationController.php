<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user =User::find(Auth::id());

        //return the organization that corresponds with the selected election
        $organization = Organization::getOrganizationForElection($user);

        return view('admin.organizations.index-organizations',
        compact('organization'));
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
    public function store(Request $request)
    {
        $userId = Auth::id();

        //INSERT ORGANIZATION
        //$org = $this->validatePost();
        $org['user_id'] = $userId;
        $org['orgname'] =request()->input('fw-organization-name');
        $org['address'] =request()->input('fw-organization-address');
        $org['email'] =request()->input('fw-organization-email-address');
        $org['phone'] =request()->input('fw-organization-mobile-number');
        $org['country'] =request()->input('fw-organization-country');
        $org['number_people'] =request()->input('fw-organization-voter-number');
        $organization = Organization::create($org);

        return $organization;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {
        $attributes = $request->validate([
            'orgname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'number_people' => 'required|numeric'
        ]);
        $organization->update($attributes);

        Alert::success('Saved', 'Organization Updated');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
