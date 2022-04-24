@props([
    'candidates'
])

@inject('design', 'App\Http\Controllers\DesignController')

<table class="table nowrap nk-tb-list is-separate dataTable no-footer datatable-init-export">
    <thead>
        <tr class="nk-tb-item nk-tb-head">
            <th class="nk-tb-col nk-tb-col-check">
                <div class="custom-control custom-control-sm custom-checkbox notext">
                    <input type="checkbox" class="custom-control-input" id="pid-all">
                    <label class="custom-control-label" for="pid-all"></label>
                </div>
            </th>
            <th class="nk-tb-col tb-col-lg export-col"><span class="sub-text">Candidate Name</span></th>
            <th class="nk-tb-col tb-col-lg export-col"><span class="sub-text">Position</span></th>
            <th class="text-right nk-tb-col nk-tb-col-tools">
            </th>
        </tr><!-- .nk-tb-item -->
    </thead>
    <tbody>
        @foreach ($candidates as $candidate)
        <tr class="nk-tb-item">
            <td class="nk-tb-col nk-tb-col-check">
                <div class="custom-control custom-control-sm custom-checkbox notext">
                    <input type="checkbox" class="custom-control-input" id="pid-01">
                    <label class="custom-control-label" for="pid-01"></label>
                </div>
            </td>
            <td class="nk-tb-col">
                <a href="#" class="project-title">
                    <div class="user-avatar bg-purple">

                        <img src="{{asset('storage/'.$candidate->image_path)}}"/>
                    </div>
                    <div class="project-info">
                        <h6 class="title">{{$candidate->name}}</h6>
                    </div>
                </a>
            </td>
            <td class="nk-tb-col tb-col-lg">
                <span>{{ucfirst($candidate->position)}}</span>
            </td>
            <td class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                    <li>
                        <div class="drodown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Candidate</span></a></li>
                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Candidate</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </td>
        </tr><!-- .nk-tb-item -->
    @endforeach
    </tbody>
</table><!-- .nk-tb-list -->

<!-- Modal -->
<div class="modal fade" id="modalFormAddVoter" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Voter Info</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter" novalidate="novalidate">
                    <div class="form-group">
                        <label class="form-label" for="email-address">Email address</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control required" id="voter-email-address" required data-msg="Required" name="voter-email-address">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="">Add voter to group?</p>
                        {{-- <label class="mr-3 form-label">No</label> --}}
                        <div class="custom-control custom-control-lg custom-switch">
                            <input type="checkbox" class="custom-control-input" id="chkboxGroupVote"
                                data-toggle="collapse" data-target="#voterGroupOptionModal"
                                aria-expanded="false" aria-controls="voterGroupOptionModal"
                                name="chkboxGroupVote">
                            <label class="custom-control-label" for="chkboxGroupVote">Yes</label>
                        </div>
                    </div>
                    <div id="voterGroupOptionModal" class="collapse">
                        <div class="row gy-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Select a group to add voter</label>
                                    <p class="fs-12px">If the group you would like to assign the voter is not in the dropdown list, select "Add New Group" from the dropdown list. You can enter the "Group ID" and "Group Name" in the fields below.</p>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="selectVoterGroupModal">
                                            <option value="addNewGroupSelect">Add New Group</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="addNewGroupFieldsModal">
                            <div class="row gy-3">
                                <div class="mt-3 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Group ID</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control required" id="formInputGroupIdModal"
                                            name="form-input-group-id-modal" data-msg="Required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Group Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control required" id="formInputGroupNameModal" name="form-input-group-name-modal" data-msg="Required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mt-4 btn btn-lg btn-primary" onclick="votersAdd();">Save
                            Information</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">E-Voter Graqle</span>
            </div>
        </div>
    </div>
</div>
<!-- .Modal -->

