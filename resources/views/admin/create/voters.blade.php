 <!-- Voters Section -->
 <div class="nk-wizard-head">
    <span class="number">Voters</span>
    <h5>Add Voters</h5>
</div>
<div class="nk-wizard-content">
    <div class="row gy-3">
        <div class="col-md-6">


            <h6 class="mt-4 mb-2">Add or import voters.</h6>
            <p class="mb-2">Add voters individually or import as many voters as
                you like
                using either a CSV or EXCEL file. You can also skip this section
                and add
                voters later when you have a list.</p>
            <p class="mb-2">Please note, in this current version of E-Vote,
                voters are
                set to anonymous be default.</p>


            <ul class="nk-block-tools g-3">
                <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em
                            class="icon ni ni-upload-cloud"></em><span>Import voter
                            list</span></a>
                </li>
                <li id="voterAddButton"><button type="button" class="btn btn-white btn-dim btn-outline-primary"
                        data-toggle="modal" data-target="#modalFormAddVoter"><em
                            class="icon ni ni-plus"

                            ></em><span>Add a voter</span></button>
                </li>
            </ul>


            <h6 class="mt-5 mb-2">Create voter groups.</h6>
            <p class="mb-2">Voter groups allow voters to vote by specific groups
                or
                allow for organizing voters by groups. You can also skip this
                section
                and add voter groups later when you have decided on a your
                groups.</p>


            <div id="field_wrapper_voter_group">
                 {{-- <div class="row gy-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fw-candidate-position">Group
                                ID</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control"
                                    id="fw-candidate-position"
                                    name="fw-candidate-position[]">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fw-candidate-name">Group
                                Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control"
                                    id="fw-candidate-name" name="fw-candidate-name[]">
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>



        <div class="col-md-6">
            <table class="table mt-4 table-bordered voter-table" id="voter-data-table">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Group ID</th>
                        <th scope="col">Group Name</th>
                        <th scope="col" class="tabledit-toolbar-column"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- add group button -->
    <div class="row gy-3">
        <div class="col-md-12">
            <div class="form-group">
                <button type="button" class="mt-3 btn btn-primary add_button_group"><em
                        class="icon ni ni-plus"
                        ></em><span>Add a group</span> </button>
            </div>
        </div>
    </div>
    <!-- .add group button @e -->

</div>
<!-- .Voters Section @e-->
