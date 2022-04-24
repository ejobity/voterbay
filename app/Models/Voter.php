<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voter extends Model
{
    use HasFactory;
    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];

/**
 * Get all the voters that belongs to User
 *
 */
public function getAll()
{
    return Voter::where('user_id', Auth::id())->get();
}

/**
 * Get all the voters that belongs to User
 *
 */
public function user()
{
    return $this->belongsTo(User::class);
}


/**
 * Get elections associated with the voter
 *
 */
public function elections()
{
    return $this->hasMany(VoterElection::class);
}


/**
* Get all the voters associated with an election
* by user id and user selected election
*/
public static function getVotersForElection($user)
{

    return  DB::table('groups')
            ->join('voters', 'groups.id','=','voters.group_id')
            ->where('voters.election_id', $user->election_selection)
            ->where('voters.user_id', $user->id)
            ->get();

}

/**
     * Get all the votes associated with an election
     * by electionID
     */
    public function votersAssociatedWithElection($electionID){

        $voters = new Voter;

        return $voters->where('election_id', $electionID)
                                ->get();
    }





}
