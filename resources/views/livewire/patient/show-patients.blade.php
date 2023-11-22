<div>
    <x-header title="Patients" separator>
        <x-slot:middle>
            <x-input placeholder="Search By Name / Phone / Email" wire:model.live.debounce.250ms="searchKey" />
        </x-slot:middle>
        <x-slot:actions>
            <x-button label="Add Patient" icon="o-plus" class="btn-primary" link="/patient/new"/>
        </x-slot:actions>
    </x-header>

    @php
        $headers = [
            ['key' => 'id', 'label' => '#'],
            ['key' => 'name', 'label' => 'Name'],
            ['key' => 'age', 'label' => 'Age'],
            ['key' => 'dob', 'label' => 'Date of Birth'],
            ['key' => 'phone', 'label' => 'Phone'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'address', 'label' => 'Address']
        ];
    @endphp

    <x-table :headers="$headers" :rows="$patients" striped>
        @scope('actions', $patient)
        <x-button icon="o-pencil" link="/patient/edit/{{ $patient->id }}" spinner class="btn-sm" />
        @endscope
    </x-table>
</div>
