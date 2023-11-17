<div>
    <h1 class="card-title text-xl pb-5 font-bold">Add New Patient</h1>
    <x-form wire:submit="save">
        <x-input label="Patient Name" placeholder="Full Name" icon="o-user" wire:model="form.name" />
        <div>
            @error('form.name')  <span class="error">{{ $message }}</span> @enderror
        </div>
        <x-input label="Email" placeholder="Email" icon="o-envelope" wire:model="form.email" />
        <div>
            @error('form.email')  <span class="error">{{ $message }}</span> @enderror
        </div>
        <x-slot:actions>
            <x-button label="Submit" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
