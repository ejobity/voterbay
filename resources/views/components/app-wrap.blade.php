<x-app-layout>
    <div class="nk-app-root">

        <!-- sidebar @s -->
        <x-sidebar />
        <!-- sidebar @e -->

        <!-- wrap @s -->
        <div class="nk-wrap">
            <!-- main header @s -->
            <x-main-header />
            <!-- main header @e -->

            <!-- main @s -->
            <div class="nk-main" style="margin-top: 2.5rem !important;">
                {{ $slot}}
            </div>
            <!-- main @e -->

            <!-- footer @s-->
            <x-footer />
            <!-- content @e -->

        </div>
        <!-- wrap @e-->

    </div>
</x-app-layout>
{{-- <!-- .app-root @e --> --}}
