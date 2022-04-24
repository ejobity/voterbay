<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show Dashboard.
     *
     */
    public function show()
    {
        //if a user has created an election before show dashboard
        if (Election::where('user_id',Auth::id())->first() != null){
            return view('admin.dashboard.show');
        }
        else{
            //else if empty show election create wizard
            return view('admin.new-election');
        }

    }

}
