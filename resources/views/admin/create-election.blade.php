<x-app-wrap-no-sidebar>
<!-- content @s -->
<x-content>
    <div class="content-page">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Create a new election</h4>
                    <div class="nk-block-des">
                        <p>Please follow the step by step wizard to create an election.</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <form action="{{route('election-store')}}" enctype="multipart/form-data"
                        class="nk-wizard nk-wizard-simple is-alter" method="POST" id="election_form">
                        @csrf

                        @include('admin.create.plan')

                        @include('admin.create.organization')

                        @include('admin.create.event')

                        @include('admin.create.candidates')

                        @include('admin.create.voters')

                        @include('admin.create.review')

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Model Form Add Voter -->

    @include('admin.create.addvoters')

    <!-- .Modal Form Add Voter @e -->
</x-content>
<!-- content @e -->
</x-app-wrap-no-sidebar>
