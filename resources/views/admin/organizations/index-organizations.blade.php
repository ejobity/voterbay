<x-app-wrap>
    <!-- content @s -->
    <x-content>
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Organization</h3>
                    <div class="nk-block-des text-soft">
                        <p>This is the organization that is hosting the event.</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                {{-- <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><a
                                        href="{{route('create-election')}}" class="btn btn-primary"><em
                    class="icon ni ni-plus"></em><span>Add Organization</span></a>
                </li>
                <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><a
                        href="{{route('create-election')}}" class="btn btn-primary"><em
                            class="icon ni ni-plus"></em><span>Create an Election Using
                            Wizard</span></a>
                </li>
                </ul>
            </div>
        </div><!-- .toggle-wrap -->
        </div><!-- .nk-block-head-content --> --}}
        </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card card-stretch">
                <div class="card-inner-group">
                    <div class="p-0 card-inner">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="/admin/organizations/{{$organization->organization_id}}"
                                    class="nk-wizard nk-wizard-simple is-alter" method="POST" id="organization_form">
                                    @csrf

                                    <!-- Organization Section @s -->
                                    <div class="nk-wizard-head">
                                        <span class="number" >Organization Information</span>
                                    </div>
                                    <div class="nk-wizard-content">
                                        <div class="row gy-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="orgname">Organization
                                                        Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required"
                                                            class="form-control required" id="orgname"
                                                            name="orgname"
                                                            value="{{$organization->orgname}}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="address">Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required"
                                                            class="form-control required" id="address"
                                                            name="address"
                                                            value="{{$organization->address}}"
                                                             required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="email">Email
                                                        Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required"
                                                            data-msg-email="Wrong Email"
                                                            class="form-control required email"
                                                            id="email"
                                                            name="email"
                                                            value={{$organization->email}}
                                                             required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone">Mobile
                                                        Number</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required"
                                                            class="form-control required"
                                                            id="phone"
                                                            name="phone"
                                                            value="{{$organization->phone}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="country">Country</label>
                                                    <div class="form-control-wrap ">
                                                        <div class="form-control-select">
                                                            <select class="form-control required" data-msg="Required"
                                                                id="country"
                                                                name="country" required>
                                                                <option value="" @if($organization->country == '') ? selected : null @endif disabled>Select Country</option>
                                                                <option value="tt" @if($organization->country == 'tt') ? selected : null @endif>Trinidad and Tobago</option>
                                                                <option value="us" @if($organization->country == 'us') ? selected : null @endif>United State</option>
                                                                <option value="uk" @if($organization->country == 'uk') ? selected : null @endif>United KingDom</option>
                                                                <option value="fr" @if($organization->country == 'fr') ? selected : null @endif>France</option>
                                                                <option value="ch" @if($organization->country == 'ch') ? selected : null @endif>China</option>
                                                                <option value="cr" @if($organization->country == 'cr') ? selected : null @endif>Czech Republic</option>
                                                                <option value="cb" @if($organization->country == 'cb') ? selected : null @endif>Colombia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="number_people">Number
                                                        of
                                                        Voters Expected</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" data-msg="Required"
                                                            class="form-control required"
                                                            id="number_people"
                                                            name="number_people"
                                                            value={{$organization->number_people}}
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .Organization Section @e -->
                                </form>
                            </div><!-- .card-inner -->
                        </div><!-- .card card-bordered -->
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </x-content>
    <!-- content @e -->
</x-app-wrap>
