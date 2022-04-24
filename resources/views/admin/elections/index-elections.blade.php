<x-app-wrap>
    <!-- content @s -->
    <x-content>
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Elections</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{count($elections)}} Election(s).</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                            data-toggle="dropdown"><em
                                                class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered
                                                By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>Active</span></a></li>
                                                <li><a href="#"><span>Pending</span></a></li>
                                                <li><a href="#"><span>Closed</span></a></li>
                                                <li><a href="#"><span>Cancelled</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><a
                                    href="{{route('create-election')}}" class="btn btn-primary"><em
                                        class="icon ni ni-plus"></em><span>Create an Election Using Wizard</span></a>
                            </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-stretch">
                <div class="card-inner-group">
                    <div class="p-0 card-inner">
                        <x-election-table-list :elections="$elections" :user="$user"/>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </x-content>
    <!-- content @e -->
</x-app-wrap>
