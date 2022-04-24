@props([
'voters'
])

@inject('design', 'App\Http\Controllers\DesignController')

<script>
    function editVoter(id, email, groupID) {
        $('#editEmail').val(email);
        $("#editGroup").val(groupID).change();
        $('#editForm').prop('action', '/admin/voter/update/' + id);
    }

    
</script>

<table class="table nowrap nk-tb-list is-separate dataTable no-footer datatable-init-export">
    <thead>
        <tr class="nk-tb-item nk-tb-head">
            <th class="nk-tb-col nk-tb-col-check">
                <div class="custom-control custom-control-sm custom-checkbox notext">
                    <input type="checkbox" class="custom-control-input" id="pid-all">
                    <label class="custom-control-label" for="pid-all"></label>
                </div>
            </th>
            <th class="nk-tb-col tb-col-lg export-col"><span class="sub-text">Email</span></th>
            <th class="nk-tb-col tb-col-lg export-col"><span class="sub-text">Group</span></th>
            <th class="text-right nk-tb-col nk-tb-col-tools">
            </th>
        </tr><!-- .nk-tb-item -->
    </thead>
    <tbody>
        @foreach ($voters as $voter)
        <tr class="nk-tb-item">
            <td class="nk-tb-col nk-tb-col-check">
                <div class="custom-control custom-control-sm custom-checkbox notext">
                    <input type="checkbox" class="custom-control-input custom-checkbox-control" name="voter[]"
                        id="{{$voter->id}}">
                    <label class="custom-control-label" for="{{$voter->id}}"></label>
                </div>
            </td>
            <td class="nk-tb-col tb-col-lg">
                <span class="email-field-{{$voter->id}}">{{$voter->email}}</span>
            </td>
            <td class="nk-tb-col tb-col-lg">
                <span class="group-field-{{$voter->id}}">{{$voter->grp_name}}</span>
            </td>
            <td class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                    <li>
                        <div class="drodown" onclick="toggleDeleteClass('{{$voter->id}}')">
                            <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="link-list-opt no-bdr">
                                    <li><a onclick="editVoter('{{$voter->id}}','{{$voter->email}}','{{$voter->group_id}}')"
                                            data-toggle="modal" data-target="#modalFormEditVoter" class="editVoter"><em
                                                class="icon ni ni-edit"></em><span>Edit Voter</span></a></li>
                                    <li>
                                        <form action="/admin/voter/delete/{{$voter->id}}" class="form-validate is-alter"
                                            novalidate="novalidate" method="POST" id="deleteForm">
                                            @csrf
                                            <a href="#" class="delete_voter"><em
                                                    class="icon ni ni-delete"></em><span>Delete Voter</span></a>
                                        </form>
                                    </li>
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
