 <!-- .Review & Complete Section @e-->

 <div class="nk-wizard-head">
    <span class="number">Review & Complete</span>
    <h5>Review</h5>
</div>
<div class="nk-wizard-content">

     <!-- nk-block @s -->
    <div class="nk-block">
        <div class="nk-block-head">
            <h5 class="title">Plan</h5>
            <p>Please review your information before proceeding.</p>
        </div><!-- .nk-block-head -->
        <div class="profile-ud-list">
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Plan</span>
                    <span class="profile-ud-value" id="summaryPlan">Starter, 1000 votes, Billed annually, $99 / yr</span>
                </div>
            </div>
        </div>
    </div>
    <!-- nk-block @e -->
    <div class="nk-divider divider md"></div>

    <!-- nk-block begin summary review content @s-->
    <div class="nk-block">
        <div class="nk-block-head">
            <h5 class="title">Organization Information</h5>
            <p>Please review your information before proceeding.</p>
        </div><!-- .nk-block-head -->
        <div class="profile-ud-list">
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Name</span>
                    <span class="profile-ud-value" id="review-organization-name"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Address</span>
                    <span class="profile-ud-value" id="review-organization-address"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Email Address</span>
                    <span class="profile-ud-value" id="review-organization-email-address"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Mobile Number</span>
                    <span class="profile-ud-value" id="review-organization-mobile-number"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Country</span>
                    <span class="profile-ud-value" id="review-organization-country"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Number of Voters</span>
                    <span class="profile-ud-value" id="review-organization-voter-number"></span>
                </div>
            </div>
        </div><!-- .profile-ud-list -->
    </div><!-- end nk-block @e -->
    <div class="nk-divider divider md"></div>

     <!-- nk-block begin summary review content @s-->
     <div class="nk-block">
        <div class="nk-block-head">
            <h5 class="title">Schedule Event</h5>
            <p>Please review your information before proceeding.</p>
        </div><!-- .nk-block-head -->
        <div class="profile-ud-list">
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Name</span>
                    <span class="profile-ud-value" id="review-event-name"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Type</span>
                    <span class="profile-ud-value" id="review-radio-election">Election</span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Start Date</span>
                    <span class="profile-ud-value" id="review-event-start-date"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">Start Time</span>
                    <span class="profile-ud-value" id="review-event-start-time"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">End Date</span>
                    <span class="profile-ud-value" id="review-event-end-date"></span>
                </div>
            </div>
            <div class="profile-ud-item">
                <div class="profile-ud wider">
                    <span class="profile-ud-label">End Time</span>
                    <span class="profile-ud-value" id="review-event-end-time"></span>
                </div>
            </div>
        </div><!-- .profile-ud-list -->
    </div><!-- end nk-block @e -->
    <div class="nk-divider divider md"></div>

     <!-- nk-block begin summary review content @s-->
     <div class="nk-block">
        <div class="nk-block-head">
            <h5 class="title">Candidates</h5>
            <p>Please review your information before proceeding.</p>
        </div><!-- .nk-block-head -->
        <table class="table mt-4 table-bordered" id="candidate-data-table">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div><!-- end nk-block @e -->
    <div class="nk-divider divider md"></div>

     <!-- nk-block begin summary review content @s-->
    <div class="nk-block">
        <div class="nk-block-head">
            <h5 class="title">Voters</h5>
            <p>Please review your information before proceeding.</p>
        </div><!-- .nk-block-head -->

        <!-- review table -->
        <a {{-- data-toggle="collapse"--}}  href="#" class="btn btn-primary" id="show-voters-review" {{-- aria-expanded="false" aria-controls="review-voter-data-table" --}} >Show Voters</a>

        {{-- <div id="review-voter-data-table" class="collapse"></div> --}}

    </div><!-- end nk-block @e -->
    <div class="nk-divider divider md"></div>

    <div class="mt-5 custom-control custom-checkbox">
        <input type="checkbox" data-msg="Required"  class="custom-control-input required" id="chkboxAgreeTerms" name="chkboxAgreeTerms" required>
        <label class="custom-control-label" for="chkboxAgreeTerms">I agree to the terms and conditions layed out in this <a href="#"> data protection policy</a></label>
    </div>



</div>
<!-- .Review & Complete Section @e-->
