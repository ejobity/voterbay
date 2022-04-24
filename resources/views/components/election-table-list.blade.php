
@props(['elections','user'])

@inject('design', 'App\Http\Controllers\DesignController')

@inject('voters', 'App\Models\Voter')

@inject('candidates', 'App\Models\Candidate')

<div class="nk-block">
    <div class="m-1 row">
        @foreach ($elections as $election)

        <div class="mt-1 col-4">
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="team">
                        <div class="team-options">
                            <div class="drodown"> <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a>
                                        </li>
                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a>
                                        </li>
                                        <li><a href="#"><em class="icon ni ni-pen"></em><span>Edit Details</span></a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="user-card user-card-s2">
                            <div class="user-avatar lg @if($election->id == $user->getUserElectionSelection(Auth::id()))
                                bg-primary
                            @else
                                bg-gray
                            @endif"> <span>{{substr($election->event_name,0,1)}}</span>
                            </div>
                            <div class="user-info">
                                <h6>{{$election->event_name}}</h6> <span class="sub-text">{{$election->orgname}}</span>
                            </div>
                        </div>
                        <ul class="team-info">
                            <li><span>Candidates</span><span>{{$candidates->candidatesAssociatedWithElection($election->id)->count()}}</span></li>
                            <li><span>Voters</span><span>{{$voters->votersAssociatedWithElection($election->id)->count()}}</span></li>
                            <li><span>Type</span><span>{{ucfirst($election->type)}}</span></li>
                            <li><span>Start Date</span><span>{{$election->start_date}}</span></li>
                            <li><span>End Date Date</span><span>{{$election->end_date}}</span></li>
                            <li><span>Status</span><span class="badge badge-dim badge-{{$design->statusColour($election->status)}}">{{ucfirst($election->status)}} </span></li>
                        </ul>
                        <form  action="/admin/elections/{{$election->id}}" method="POST">
                            @csrf
                        <div class="team-view">
                            <button type="submit"
                                    @if($election->id == $user->getUserElectionSelection(Auth::id()))
                                        class="btn btn-block btn-primary">
                                        <span> Selected
                                    @else
                                        class="btn btn-block btn-dim btn-primary">
                                        <span> Select Election
                                    @endif
                                </span>
                            </button>
                        </div>
                        </form>
                    </div><!-- .team -->
                </div><!-- .card-inner -->
            </div><!-- .card -->
        </div>

        @endforeach
    </div>
</div>
