<div>
    <x-header title="Add New Doctor" separator />
    <x-form wire:submit="save">
        <x-input label="Name*" placeholder="Full Name" icon="o-user" wire:model="form.name" />
        <x-input label="NMC Registration Number" icon="o-user" wire:model="form.registrationNumber" />
        <x-input label="Specialization" icon="o-user" wire:model="form.specialization" />
        <x-input label="Phone Number" icon="o-user" wire:model="form.phone" />
        <x-input label="Email" icon="o-user" wire:model="form.email" />
        <x-input label="Address" icon="o-user" wire:model="form.address" />

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
