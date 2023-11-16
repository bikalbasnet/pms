<div>
    {{ $title }}
    <x-form wire:submit="save">
    <x-input label="Name" wire:model="name" />
    <x-input label="Amount" wire:model="amount" prefix="USD" money hint="It submits an unmasked value" />
    <x-slot:actions>
        <x-button label="Cancel" />
        <x-button label="Click me!" class="btn-primary" type="submit" spinner="save" />
    </x-slot:actions>
</x-form>

</div>
