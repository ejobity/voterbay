<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateElections;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/vote', function () {
    return view('user.vote');
});

Route::get('/user/thankyou', function () {
    return view('user.thankyou');
});

Route::get('/admin', function () {
    return view('auth.login');
});

/* Route::get('/admin/create', function () {
    return view('admin.create');
})->name('create-election'); */


//Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/admin/election/create', [ElectionController::class, 'create'])
    ->name('create-election');

    Route::post('/admin/election/store', [ElectionController::class, 'store'])->name('election-store');

     //show elections
     Route::get('/admin/elections', [ElectionController::class, 'index'])->name('elections-index');

     //show elections
     Route::post('/admin/elections/{selection}', [ElectionController::class, 'selectIndex'])->name('elections.select.index');

     //show canidates
     Route::get('/admin/candidates', [CandidateController::class, 'index'])->name('candidates-index');

     //show organizations
     Route::get('/admin/organizations', [OrganizationController::class, 'index'])->name('organizations-index');

     //store organizations
     Route::patch('/admin/organizations/{organization}', [OrganizationController::class, 'update'])->name('organizations.update');

    //show dashboard
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

    //show voters
    Route::get('/admin/voters', [VoterController::class, 'index'])->name('voter.index');

    //store voter
    Route::post('/admin/voter/store', [VoterController::class, 'storeVoterSingle'])->name('voter.store.single');

    //update voter
    Route::post('/admin/voter/update/{voter}', [VoterController::class, 'update'])->name('voter.update');

    //delete voter
    Route::post('/admin/voter/delete/{voter}', [VoterController::class, 'destroy'])->name('voter.delete');

    //delete voters
    Route::post('/admin/voter/delete/', [VoterController::class, 'destroyMany'])->name('voter.delete.many');

    //show groups
    Route::get('/admin/groups', [GroupController::class, 'index'])->name('group.index');

});






