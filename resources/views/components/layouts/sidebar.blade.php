<x-slot:sidebar drawer="main-drawer" collapsible class="pt-3 bg-sky-800 text-white">

    {{-- Hidden when collapsed --}}
    <div class="hidden-when-collapsed ml-5 font-black text-4xl text-yellow-500">PMS</div>

    {{-- Display when collapsed --}}
    <div class="display-when-collapsed ml-5 font-black text-4xl text-orange-500">m</div>

    {{-- Custom `active menu item background color` --}}
    <x-menu activate-by-route active-bg-color="bg-base-300/10">

        {{-- User --}}
        @if($user = auth()->user())
            <x-list-item :item="$user" sub-value="username" no-separator no-hover class="!-mx-2 mt-2 mb-5 border-y border-y-sky-900">
                <x-slot:actions>
                    <a href="/logout">
                        <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" />
                    </a>
                </x-slot:actions>
            </x-list-item>
        @endif

        <x-menu-item title="Home" icon="o-home" link="/" />
        <x-menu-item title="Patients" icon="o-users" link="/patient" />
        <x-menu-item title="Doctors" icon="o-users" link="/doctor" />
        <x-menu-item title="Appointments" icon="o-users" link="/appointment" />
        {{--<x-menu-sub title="Patient" icon="o-user">
            <x-menu-item title="Patients" icon="o-users" link="/patient" />
            <x-menu-item title="Add New Patient" icon="o-user-plus" link="/patient/new" />
        </x-menu-sub>--}}
        {{--            <x-menu-sub title="Doctor" icon="o-user">--}}
        {{--                <x-menu-item title="Doctors" icon="o-users" link="/doctor" />--}}
        {{--                <x-menu-item title="Add New Doctor" icon="o-user-plus" link="/doctor/new" />--}}
        {{--            </x-menu-sub>--}}
        {{--            <x-menu-sub title="Appointment" icon="o-user">--}}
        {{--                <x-menu-item title="Appointments" icon="o-users" link="/appointment" />--}}
        {{--                <x-menu-item title="Create Appointment" icon="o-user-plus" link="/appointment/new" />--}}
        {{--            </x-menu-sub>--}}

        {{--            <x-menu-sub title="Settings" icon="o-cog-6-tooth">--}}
        {{--                <x-menu-item title="Wifi" icon="o-wifi" link="####" />--}}
        {{--                <x-menu-item title="Archives" icon="o-archive-box" link="####" />--}}
        {{--            </x-menu-sub>--}}
    </x-menu>
</x-slot:sidebar>
