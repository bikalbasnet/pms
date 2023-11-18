<div>
    <h1 class="card-title text-xl pb-5 font-bold">Add New Patient</h1>
    <x-form wire:submit="save">
        <x-input label="Name*" autocomplete="off" placeholder="Full Name" icon="o-user" wire:model="form.name" />
        <x-input label="Phone" autocomplete="off" placeholder="Phone" icon="o-phone" wire:model="form.phone" />1
        @php
            $genders = [
                [
                    'id' => 'male',
                    'name' => 'Male'
                ],
                [
                    'id' => 'female',
                    'name' => 'Female'
                ],
                [
                    'id' => 'other',
                    'name' => 'Other'
                ],
            ];
        @endphp
        <x-select label="Gender" placeholder="Select a Gender" wire:model="form.gender" :options="$genders"/>

        <x-input label="Address" icon="o-map" wire:model="form.address"></x-input>

        <div>
            <x-input label="Year" type="number" wire:model="form.ageYear"></x-input>
            <x-input label="Month" type="number" wire:model="form.ageMonth"></x-input>
        </div>
{{--        <x-datetime label="Date of Birth" icon="o-calendar" wire:model="form.dob" />--}}
        <x-input label="Email" placeholder="Email" icon="o-envelope" wire:model="form.email" />
        <x-textarea
            label="Notes"
            wire:model="form.notes"
            rows="5"
            inline
        />

        <x-slot:actions>
            <x-button label="Submit" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
