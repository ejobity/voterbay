<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];

/**
 * Get all the groups that belongs to User
 *
 */
public function getAll()
{
    return Group::where('user_id', Auth::id())->get();
}

/**
 * Get all the groups that belongs to user
 *
 */
public function user()
{
    return $this->belongsTo(Group::class);
}


/**
* Get all the voter groups associated with an election
* by user id and user selected election
*/
public static function getGroupsForElection($user)
{
    $groups = new Group;

    return $groups->where('user_id',$user->id)
                ->where('election_id', $user->election_selection)
                ->get();
}

}
