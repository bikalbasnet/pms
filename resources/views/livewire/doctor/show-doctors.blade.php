<div>
    <h1 class="text-xl pb-5">Doctors</h1>

    <x-input placeholder="Search By Name / NMC Number " wire:model.live.debounce.250ms="searchKey">
        <x-slot:append>
            <x-button label="Search" icon="o-magnifying-glass" class="btn-primary rounded-l-none" />
        </x-slot:append>
    </x-input>

    @php
        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Name'],
            ['key' => 'registration_number', 'label' => 'NMC Number'],
            ['key' => 'phone', 'label' => 'Phone'],
        ];
    @endphp

    <x-table :headers="$headers" :rows="$doctors" striped>
        @scope('actions', $doctor)
        <x-button icon="o-pencil" link="/doctor/edit/{{ $doctor->id }}" spinner class="btn-sm" />
        @endscope
    </x-table>
</div>
