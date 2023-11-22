<div>
    <x-header title="{{ $form->patient === null ? 'Add New Patient' : 'Edit' }}" separator />
    <x-form wire:submit="save">
        <x-input label="Patient Id" disabled  icon="o-envelope" wire:model="form.patientId" />
        <x-input label="Name*" autocomplete="off" placeholder="Full Name" icon="o-user" wire:model="form.name" />
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
        <x-select label="Gender *" placeholder="Select a Gender" wire:model="form.gender" :options="$genders"/>

        <x-input label="Phone" autocomplete="off" placeholder="Phone" icon="o-phone" wire:model="form.phone" />
        <x-input label="Address" icon="o-map" wire:model="form.address"></x-input>
        <div class="grid-container">
            <x-input label="Year" type="number" wire:model="form.ageYear"></x-input>
            <x-input label="Month" type="number" wire:model="form.ageMonth"></x-input>
        </div>
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
