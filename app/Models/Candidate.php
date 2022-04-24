<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get all the candidates that belongs to User
     *
     */
    public function getAll()
    {
        return Candidate::where('user_id', Auth::id())->get();
    }

    /**
     * Get all the candidates that belongs to user
     *
     */
    public function user()
    {
        return $this->belongsTo(Candidate::class);
    }

    /**
     * Get all the votes associated with the candidate
     *
     */
    public function votes()
    {
        return $this->hasMany(VoterElection::class);
    }

  /**
     * Get all the elections associated with the candidate
     *
     */
    public function elections()
    {
        return $this->hasMany(CandidateElection::class);
    }

    /**
     * Get all the candidates associated with an election
     * by user id and user selected election
     */
    public static function getCandidatesForElection($user)
    {
        $candidates = new Candidate;

        return $candidates->where('user_id',$user->id)
                            ->where('election_id', $user->election_selection)
                                ->get();

    }

    /**
     * Get all the candidates associated with an election
     * by electionID
     */
    public function candidatesAssociatedWithElection($electionID){

        $candidates = new Candidate;

        return $candidates->where('election_id', $electionID)
                                ->get();
    }
}
