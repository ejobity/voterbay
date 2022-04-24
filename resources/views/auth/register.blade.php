<x-guest-layout>

    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="bg-white nk-split-content nk-block-area nk-block-area-column nk-auth-container w-lg-45">
                            <div class="p-3 absolute-top-right d-lg-none p-sm-5">
                                <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="pb-5 brand-logo">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Register</h5>
                                        <div class="nk-block-des">
                                            <p>Create New Graqle E-Vote Account</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->

                                <x-jet-validation-errors class="mb-3" />

                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="form-control-lg {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                                    </div>
                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                                    </div>

                                  <div class="form-group">
                    <x-jet-label value="{{ __('Phone') }}" />

                    <x-jet-input class="form-control-lg {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone"
                                 :value="old('phone')" required autofocus autocomplete="phone" />
                    <x-jet-input-error for="phone"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Address') }}" />

                    <x-jet-input class="form-control-lg {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address"
                                 :value="old('address')" required autofocus autocomplete="address" />
                    <x-jet-input-error for="address"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-passcode-eye datatarget="password">
                    <x-jet-input
                    class="form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                    name="password"
                    id=password
                    required
                    autocomplete="new-password"
                    />
                    </x-passcode-eye>


                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-passcode-eye datatarget="password_confirmation">
                    <x-jet-input
                    class="form-control-lg"
                    type="password"
                    name="password_confirmation"
                    id=password_confirmation
                    required
                    autocomplete="new-password" />
                    </x-passcode-eye>
                </div>

                                     @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif


                                    <div class="form-group">
                                      {{--   <button class="btn btn-lg btn-primary btn-block">Register</button> --}}
                                        <x-jet-button class="btn btn-lg btn-primary btn-block">
                            {{ __('Register') }}
                        </x-jet-button>
                                    </div>
                                </form><!-- form -->

                                <div class="pt-4 form-note-s2"> {{ __('Already have an account ?') }} <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
                                </div>

                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
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
                                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>English</small></a>
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
                                    </ul><!-- nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2021 Graqle. All Rights Reserved.</p>
                                </div>
                            </div><!-- nk-block -->
                        </div><!-- nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true" >
                             <div class="slider-wrap w-100" >
                              <div class="slider-init">
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round" src="https://freespiritholiday.co.uk/wp-content/uploads/2017/09/Happy-Person-Transparent.png" srcset="./images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->

                                </div><!-- .slider-init -->
                            </div> <!-- .slider-wrap -->

                        </div><!-- nk-split-content -->
                    </div><!-- nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->







</x-guest-layout>
