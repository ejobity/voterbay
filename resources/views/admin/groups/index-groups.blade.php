<x-app-wrap>
    <!-- content @s -->
    <x-content>
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Groups</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{count($groups)}} Group(s).</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">

                                <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><a
                                        href="{{route('create-election')}}" class="btn btn-primary"><em
                                            class="icon ni ni-plus"></em><span>Add Group</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">

                    <div class="p-0 ">
                        <x-group-table-list :groups="$groups" />
                    </div>

        </div><!-- .nk-block -->
    </x-content>
    <!-- content @e -->
</x-app-wrap>
