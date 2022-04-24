<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;
    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];

/**
 * Get all the organizations that belongs to User
 *
 */
public function getAll()
{
    $organizations = DB::table('organizations')
                        ->where('organizations.user_id','=', Auth::ID())
                        ->get();

    return $organizations;
}

/**
 * Get all the organizations that belongs to user
 *
 */
public function user()
{
    return $this->belongsTo(Organization::class);
}

/**
 * Get all the elections associated with this organization
 *
 */
public function elections()
{
    return DB::table('organizations')
                ->join('elections', 'elections.organization_id','=','organizations.id')
                ->where('organizations.user_id','=', Auth::ID())
                ->get();
}

/**
 * Get all the voters associated with this organization
 *
 */
public function voters()
{
    return DB::table('organizations')
                ->join('voters', 'voters.organization_id','=','organizations.id')
                ->where('organizations.user_id','=', Auth::ID())
                ->get();
}

/**
 * Get all the candidates associated with this organization
 *
 */
public function candidates()
{
    return DB::table('organizations')
                ->join('candidates', 'candidates.organization_id','=','organizations.id')
                ->where('organizations.user_id','=', Auth::ID())
                ->get();
}

 /**
     * Get all the organization associated with an election
     * by user id and user selected election
     */
public static function getOrganizationForElection($user)
{
    
    //return the organization that corresponds with the selected election
    $organization = DB::table('organization_elections')
                    ->join('organizations', 'organizations.id', '=', 'organization_elections.organization_id')
                    ->join('elections', 'elections.id', '=', 'organization_elections.election_id')
                    ->where('elections.id',$user->election_selection)
                    ->first();

    return $organization;
}





}
