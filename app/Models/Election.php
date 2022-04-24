<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Election extends Model
{
    use HasFactory;
    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];

/**
 * Get all the elections that belongs to User
 *
 */
public function getAll()
{
    return Election::where('user_id', Auth::id())->get();
}

/**
 * Get all the elections that belongs to user
 *
 */
public function user()
{
    return $this->belongsTo(Election::class);
}

/**
 * Get all the elections that belongs to this organization
 *
 */
public function organization()
{
    return $this->belongsTo(Organization::class);
}


/**
 * Join organization with the associated election
 *
 */
public function electionAndOrganization()
{
    return DB::table('organization_elections')
    ->join('organizations', 'organizations.id','=','organization_elections.organization_id')
    ->join('elections', 'elections.id','=','organization_elections.election_id')
    ->where('elections.user_id','=', Auth::id())
    ->get();
}




}
