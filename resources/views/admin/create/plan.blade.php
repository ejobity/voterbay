<!-- Plans Section @s -->
<div class="nk-wizard-head">
    <span class="number">Plan</span>
    <h5>Select a Plan</h5>
</div>
<div class="nk-wizard-content">
    <h6 class="mb-3">Please select a plan for the number of voters</h6>
    <ul class="custom-control-group" id="planRadioGroup">
        <li>
            <div class="text-center card card-bordered pricing">
                <div class="pricing-body">
                    <div class="pricing-media">
                        <img src="{{ asset('images/icons/plan-s1.svg') }}" alt="">
                    </div>
                    <div class="mx-auto pricing-title w-220px">
                        <h5 class="title">Starter</h5>
                        <span class="sub-text">If you are a small business amn please
                            select this plan</span>
                    </div>
                    <div class="pricing-amount">
                        <div class="amount">$99 <span>/yr</span></div>
                        <span class="bill">1000 Voters, Billed Yearly</span>
                    </div>
                    {{-- <div class="pricing-action">
                <a href="#" class="btn btn-primary">Select Plan</a>
            </div> --}}
                    <div
                        class="custom-control custom-control-sm custom-radio custom-control-pro">
                        <input type="radio" class="custom-control-input"
                            name="btnRadioPlan" id="btnRadioStarter"
                            value="1">
                        <label class="custom-control-label"
                            for="btnRadioStarter">Starter</label>
                    </div>
                </div>
            </div>

        </li>
        <li>
            <div class="text-center card card-bordered pricing recommend">
                <span class="pricing-badge badge badge-primary">Recommend</span>
                <div class="pricing-body">
                    <div class="pricing-media">
                        <img src="{{ asset('images/icons/plan-s2.svg') }}" alt="">
                    </div>
                    <div class="mx-auto pricing-title w-220px">
                        <h5 class="title">Pro</h5>
                        <span class="sub-text">If you are a small business amn please
                            select this plan</span>
                    </div>
                    <div class="pricing-amount">
                        <div class="amount">$299 <span>/yr</span></div>
                        <span class="bill">5000 Voters, Billed Yearly</span>
                    </div>
                    {{-- <div class="pricing-action">
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div> --}}
                    <div
                        class="custom-control custom-control-sm custom-radio custom-control-pro">
                        <input type="radio" class="custom-control-input"
                            name="btnRadioPlan" id="btnRadioPro" checked value="2">
                        <label class="custom-control-label"
                            for="btnRadioPro">Pro</label>
                    </div>
                </div>
            </div>

        </li>

        <li>
            <div class="text-center card card-bordered pricing">
                <div class="pricing-body">
                    <div class="pricing-media">
                        <img src="{{ asset('images/icons/plan-s3.svg') }}" alt="">
                    </div>
                    <div class="mx-auto pricing-title w-220px">
                        <h5 class="title">Enterprise</h5>
                        <span class="sub-text">If you are a small business amn please
                            select this plan</span>
                    </div>
                    <div class="pricing-amount">
                        <div class="amount">$599 <span>/yr</span></div>
                        <span class="bill">15000 Voters, Billed Yearly</span>
                    </div>
                    {{-- <div class="pricing-action">
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div> --}}
                    <div
                        class="custom-control custom-control-sm custom-radio custom-control-pro">
                        <input type="radio" class="custom-control-input"
                            name="btnRadioPlan" id="btnRadioEnterprize"
                            value="3">
                        <label class="custom-control-label"
                            for="btnRadioEnterprize">Enterprise</label>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="text-center card card-bordered pricing">
                <div class="pricing-body">
                    <div class="pricing-media">
                        <img src="{{ asset('images/icons/plan-s4.svg') }}" alt="">
                    </div>
                    <div class="mx-auto pricing-title w-220px">
                        <h5 class="title">Mega</h5>
                        <span class="sub-text">If you are a small business amn please
                            select this plan</span>
                    </div>
                    <div class="pricing-amount">
                        <div class="amount">Call us for a quote </div>
                        <span class="bill">Over 15000 Voters</span>
                    </div>
                    {{-- <div class="pricing-action">
                    <a href="#" class="btn btn-primary">Select Plan</a>
                </div> --}}
                    <div
                        class="custom-control custom-control-sm custom-radio custom-control-pro">
                        <input type="radio" class="custom-control-input"
                            name="btnRadioPlan" id="btnRadioMega"
                            value="4">
                        <label class="custom-control-label"
                            for="btnRadioMega">Mega</label>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- .PLANS Section @e -->
