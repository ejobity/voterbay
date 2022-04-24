<!-- Event Section -->
<div class="nk-wizard-head">
    <span class="number">Event</span>
    <h5>Schedule EVENT</h5>
</div>
<div class="nk-wizard-content">
    <div class="row gy-3">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="fw-event-name">Event Name</label>
                <div class="form-control-wrap">
                    <input type="text" data-msg="Required" class="form-control required"
                        id="fw-event-name" name="fw-event-name" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p class="form-label title">Event Type </p>
                <ul class="custom-control-group" id="electionTypeRadioGroup">
                    <li>
                        <div
                            class="custom-control custom-control-sm custom-radio custom-control-pro">
                            <input type="radio" class="custom-control-input"
                                name="btnRadioElectionType" id="btnRadioElection" value="election"
                                checked>
                            <label class="custom-control-label"
                                for="btnRadioElection">Election</label>
                        </div>
                    </li>
                    <li>
                        <div
                            class="custom-control custom-control-sm custom-radio custom-control-pro">
                            <input type="radio" class="custom-control-input"
                                name="btnRadioElectionType" id="btnRadioMeeting" value="meeting">
                            <label class="custom-control-label"
                                for="btnRadioMeeting">Meeting</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Start Date</label>
                <div class="form-control-wrap">
                    <div class="form-icon form-icon-right ">
                        <em class="icon ni ni-calendar-alt"></em>
                    </div>
                    <input type="text" class="form-control date-picker-alt required"
                        data-msg="Required" data-date-format="yyyy-mm-dd"
                        id="fw-event-start-date" name="fw-event-start-date"
                        required>
                </div>
                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Start Time</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control time-picker required"
                        placeholder="Start Time" data-msg="Required"
                        id="fw-event-start-time" name="fw-event-start-time"
                        value="12:00 PM" required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">End Date</label>
                <div class="form-control-wrap">
                    <div class="form-icon form-icon-right ">
                        <em class="icon ni ni-calendar-alt"></em>
                    </div>
                    <input type="text" class="form-control date-picker-alt required"
                        data-msg="Required" data-date-format="yyyy-mm-dd"
                        id="fw-event-end-date" name="fw-event-end-date"  required>
                </div>
                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">End Time</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control time-picker required"
                        placeholder="End Time" data-msg="Required"
                        id="fw-event-end-time" name="fw-event-end-time" value="12:00 PM" required>
                </div>
            </div>
        </div><!-- .col -->
    </div>
</div>
<!-- .Event Section @e-->
