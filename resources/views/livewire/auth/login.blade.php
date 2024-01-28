<div>
    <x-form wire:submit="login">
        <x-input label="Username / Email" wire:model="username" />
        <x-input label="Password" wire:model="password" type="password" />
        <x-slot:actions>
            <x-button label="Submit" class="btn-primary" type="submit" />
        </x-slot:actions>
    </x-form>
</div>
