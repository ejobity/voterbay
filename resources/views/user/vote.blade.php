<x-head/>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">

                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <h4 class="mb-4">Please select and click the button to vote for your Guild President</h4>

                                <ul class="custom-control-group custom-control-vertical custom-control-stacked w-100">
                                                        <li>
                                                            <div class="custom-control custom-control-md custom-radio custom-control-pro">
                                                                <input type="radio" class="custom-control-input" id="user-choose-s1" name="user-choose">
                                                                <label class="custom-control-label" for="user-choose-s1">
                                                                    <span class="user-card">
                                                                        <span class="user-avatar lg">
                                                                            <img src="./images/avatar/c-sm.jpg" alt="">
                                                                        </span>
                                                                        <span class="ml-2 fw-bold fs-16px">Keisha Jensen</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-md custom-radio custom-control-pro">
                                                                <input type="radio" class="custom-control-input" id="user-choose-s3" name="user-choose">
                                                                <label class="custom-control-label" for="user-choose-s3">
                                                                    <span class="user-card">
                                                                        <span class="user-avatar lg">
                                                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                                                        </span>
                                                                        <span class="ml-2 fw-bold fs-16px">Keith Jensen</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-control-md custom-radio custom-control-pro">
                                                                <input type="radio" class="custom-control-input" id="user-choose-s4" name="user-choose">
                                                                <label class="custom-control-label" for="user-choose-s4">
                                                                    <span class="user-card">
                                                                        <span class="user-avatar lg">
                                                                            <img src="./images/avatar/d-sm.jpg" alt="">
                                                                        </span>
                                                                        <span class="ml-2 fw-bold fs-16px">Daisy Morgan</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    <div class="nk-block-content text-center justify-content-center mt-2">
                                                        <a href="#" class="btn btn-xl btn-primary " data-toggle="modal" data-target="#modalAlert">Submit Vote</a>
                                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                        <li class="nav-item dropup">
                                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2021 Graqle. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>

    <!-- Modal Alert -->
    <div class="modal fade" tabindex="-1" id="modalAlert">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                        <h4 class="nk-modal-title">Congratulations!</h4>
                        <div class="nk-modal-text">
                            <div class="caption-text">You’ve successfully submitted your vote for<strong> Keith Jensen</strong></div>
                            <span class="sub-text-sm"></span>
                        </div>
                        <div class="nk-modal-action">
                            <a href="/user/thankyou" class="btn btn-lg btn-mw btn-primary">OK</a>
                        </div>
                    </div>
                </div><!-- .modal-body -->
                {{-- <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
                        <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.7.0"></script>
    <script src="./assets/js/scripts.js?ver=2.7.0"></script>

</html>
