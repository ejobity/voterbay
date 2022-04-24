@props(['organizations','elections','voters', 'candidates'])

<div class="nk-block">
    <div class="m-1 row">
        @foreach ($organizations as $organization)

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
                            <div class="user-avatar lg bg-primary"> <span>{{substr($organization->orgname,0,1)}}</span>
                            </div>
                            <div class="user-info">
                                <h6>{{$organization->orgname}}</h6> <span class="sub-text">{{$organization->address}}</span>
                            </div>
                        </div>
                        <ul class="team-info">
                            <li><span>Elections</span><span>{{$elections->count()}}</span></li>
                            <li><span>Candidates</span><span>{{$candidates->count()}}</span></li>
                            <li><span>Voters</span><span>{{$voters->count()}}</span></li>
                        </ul>
                        <div class="team-view"> <a href="/demo3/user-details-regular.html"
                                class="btn btn-block btn-dim btn-primary"><span>Select Organization</span></a> </div>
                    </div><!-- .team -->
                </div><!-- .card-inner -->
            </div><!-- .card -->
        </div>

        @endforeach
    </div>
</div>
