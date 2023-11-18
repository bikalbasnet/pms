<div>
    <h1 class="card-title text-xl pb-5 font-bold">Patients</h1>

    <x-input placeholder="Search By Name / Phone / Email " wire:model.live.debounce.250ms="searchKey">
        <x-slot:append>
            <x-button label="Search" icon="o-magnifying-glass" class="btn-primary rounded-l-none" />
        </x-slot:append>
    </x-input>
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
