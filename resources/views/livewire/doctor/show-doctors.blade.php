<div>
    <x-header title="Doctors" separator>
        <x-slot:middle>
            <x-input placeholder="Search By Name / NMC Number " wire:model.live.debounce.250ms="searchKey" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button icon="o-plus" class="btn-primary" link="/doctor/new"/>
        </x-slot:actions>
    </x-header>

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
