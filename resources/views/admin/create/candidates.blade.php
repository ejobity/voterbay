 <!-- Candidates Section -->
 <div class="nk-wizard-head">
    <span class="number">Candidates</span>
    <h5>Candidates</h5>
</div>
<div class="nk-wizard-content">

    <div id="field_wrapper">
        <h6 class="mt-5 mb-2">Add as many candidates!</h6>
        <p>Add as many candidates as you like. You must add at least 1 candidate. You can add more
            candidates later.</p>

        <div class="row gy-3">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label" for="fw-candidate-name">Candidate
                        Name</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control required" id="fw-candidate-name"
                            name="fw-candidate-name[]" data-msg="Required" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label" for="fw-candidate-position">Candidate
                        Position</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control required" data-msg="Required"
                            id="fw-candidate-position" name="fw-candidate-position[]" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label" for="candidatePictureLabel">Candidate
                        Picture</label>
                    <div class="form-control-wrap">
                        <div class="custom-file">
                            <input accept="image/*" type="file" class="custom-file-input candidate_file_input" id="candidatePicture"
                                name="fw-candidate-image[]" oninput="candidate_image.src=window.URL.createObjectURL(this.files[0])"/>
                            <label class="custom-file-label candidate_file_label" id="candidatePicture-label" for="candidatePicture">Choose
                                file</label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="user-avatar xl">
                        <img src="https://icons.iconarchive.com/icons/papirus-team/papirus-status/128/avatar-default-icon.png" alt="candidate image" class="candidate_image" id="candidate_image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- add candidate button -->
    <div class="row gy-3">
        <div class="col-md-12">
            <div class="form-group">
                <a href="#" class="mt-3 btn btn-primary add_button"><em
                        class="icon ni ni-plus"></em><span>Add a candidate</span> </a>
            </div>
        </div>
    </div>
    <!-- .add candidate button @e -->

</div>
<!-- .Candidates Section @e-->
