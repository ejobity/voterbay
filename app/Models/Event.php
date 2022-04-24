<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    /**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];

/**
 * Get all the events that belongs to User
 *
 */
public function getAll()
{
    return Event::where('user_id', Auth::id())->get();
}

/**
 * Get all the eventsthat belongs to user
 *
 */
public function user()
{
    return $this->belongsTo(Event::class);
}

}
