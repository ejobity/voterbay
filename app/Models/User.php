<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'password',


    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the elections associated with the user .
     */
    public function elections()
    {
        return $this->hasMany(Election::class);
    }

    /**
     * Get the organizations associated with the user .
     */
    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }

    /**
     * Get the candidates associated with the user .
     */
    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    /**
     * Get the voters associated with the user .
     */
    public function voters()
    {
        return $this->hasMany(Voter::class);
    }

    /**
     * Get the groups associated with the user .
     */
    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    /**
     * Get user data by ID
     */
    public function getData($userID)
    {
        return DB::table('users')->where('user.id',$userID)->get();
    }

    /**
     * Get user election selection by user id
     */
    public function getUserElectionSelection($userID)
    {
        return DB::table('users')->where('users.id',$userID)->pluck('election_selection')->first();
    }




}
