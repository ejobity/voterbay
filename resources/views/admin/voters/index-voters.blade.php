<x-app-wrap>
    <!-- content @s -->
    <x-content>
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Voters</h3>
                    <div class="nk-block-des text-soft">
                        <p>You have total {{count($voters)}} Voter(s).</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li id="deleteCheckedRecords" class="d-none">
                                    <form action="/admin/voter/delete/" class="form-validate is-alter"
                                        novalidate="novalidate" method="POST">
                                        @csrf
                                        <a href="#" class="btn btn-outline-primary"><em
                                                class="icon ni ni-delete"></em><span>Delete Checked
                                                Voters</span></a>
                                    </form>
                                </li>
                                <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                            class="icon fas fa-file-import"></em><span>Import Voters</span></a>
                                </li>
                                <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalFormAddVoter"><a
                                        href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                            Voter</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .toggle-wrap -->
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="p-0 ">
                <x-voter-table-list :voters="$voters" />
            </div>
        </div><!-- .nk-block -->



        <!-- Add Modal -->
        <div class="modal fade" id="modalFormAddVoter" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Voters</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('voter.store.single')}}" class="form-validate is-alter"
                            novalidate="novalidate" method="POST">
                            @csrf
                            <div id="voterRow">
                                <div class="row gy-3">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email address *</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control required" id="email" required
                                                    data-msg="Required" name="email[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Group <em data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="You can assign voters to groups. This is optional. To add more groups, go to menu->voters->voter groups."
                                                    class="fas fa-info-circle"></em></label>
                                            <div class="form-control-wrap">
                                                <select class="form-select" name='group_id[]'>
                                                    <script>
                                                        const grp_name = [];
                                                        const grp_id = [];

                                                    </script>
                                                    @foreach ($groups->all() as $group)
                                                    <option value={{$group->id}}>
                                                        {{$group->grp_name}}
                                                    </option>
                                                    <script>
                                                        grp_id.push('{{ $group->id }}');
                                                        grp_name.push('{{ $group->grp_name }}');

                                                    </script>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 mb-3 form-group" id="addVoterButton">
                                <a href="#" class="btn btn-dim btn-primary">+ Add Voter</a>
                            </div>
                            <div class="modal-footer bg-light">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Save Voters</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- .Add Modal -->


        <!-- Edit Modal -->
        <div class="modal fade" id="modalFormEditVoter" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Voter</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/voter/update/" class="form-validate is-alter"
                            novalidate="novalidate" method="POST" id="editForm">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email address *</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control required" id="editEmail" required
                                                data-msg="Required" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group <em data-toggle="tooltip" data-placement="top"
                                                title="You can assign voters to groups. This is optional. To add more groups, go to menu->voters->voter groups."
                                                class="fas fa-info-circle"></em></label>
                                        <div class="form-control-wrap">
                                            <select class="form-select" name='group_id' id="editGroup">
                                                @foreach ($groups->all() as $group)
                                                <option value={{$group->id}}>
                                                    {{$group->grp_name}}
                                                </option>
                                                <script>
                                                    grp_id.push('{{ $group->id }}');
                                                    grp_name.push('{{ $group->grp_name }}');

                                                </script>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 modal-footer bg-light">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Edit Voter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- .Edit Modal -->






    </x-content>
    <!-- content @e -->
</x-app-wrap>
