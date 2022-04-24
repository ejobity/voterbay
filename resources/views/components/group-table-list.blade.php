@props([
    'groups'
])

@inject('design', 'App\Http\Controllers\DesignController')

<table class="table nowrap nk-tb-list is-separate dataTable no-footer datatable-init">
    <thead>
        <tr class="nk-tb-item nk-tb-head">
            <th class="nk-tb-col nk-tb-col-check">
                <div class="custom-control custom-control-sm custom-checkbox notext">
                    <input type="checkbox" class="custom-control-input" id="pid-all">
                    <label class="custom-control-label" for="pid-all"></label>
                </div>
            </th>
            <th class="nk-tb-col tb-col-mb export-col"><span class="sub-text">Group ID Tag</span></th>
            <th class="nk-tb-col tb-col-lg export-col"><span class="sub-text">Group Name</span></th>


            <th class="text-right nk-tb-col nk-tb-col-tools">
            </th>
        </tr><!-- .nk-tb-item -->
    </thead>
    <tbody>
        @foreach ($groups as $group)
        <tr class="nk-tb-item">
            <td class="nk-tb-col nk-tb-col-check">
                <div class="custom-control custom-control-sm custom-checkbox notext">
                    <input type="checkbox" class="custom-control-input" id="pid-01">
                    <label class="custom-control-label" for="pid-01"></label>
                </div>
            </td>
            <td class="nk-tb-col tb-col-lg">
                <span>{{$group->grp_id_tag}}</span>
            </td>
            <td class="nk-tb-col tb-col-lg">
                <span>{{$group->grp_name}}</span>
            </td>

            <td class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                    <li>
                        <div class="drodown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#" data-toggle="modal" data-target="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit Group</span></a></li>
                                    <li><a data-toggle="modal" data-target="#modalDelete" href="#"><em class="icon ni ni-delete"></em><span>Delete Group</span></a></li>
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

