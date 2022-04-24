@inject('elections', 'App\Models\Election')

@inject('user', 'App\Models\User')

<div class=row>
    <div class="mt-1 col-2">
        <span class="nk-menu-icon"><em class="icon fas fa-person-booth"></em></span>
    </div>
    <div class="col-10">
        <form  action="/admin/elections/select" method="POST" id="election_selection_form">
            @csrf
        <div class="form-group" id="election_selection_select">
            <div class="form-control-wrap">
                <select class="form-select" name="election_selection" >
                    @foreach ($elections->all() as $election)
                    <option value={{$election->id}}
                        @if($election->id == $user->getUserElectionSelection(Auth::id())) ? selected : null @endif>{{$election->event_name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        </form>
    </div>
</div>

{{-- @if($organization->country == '') ? selected : null @endif --}}
