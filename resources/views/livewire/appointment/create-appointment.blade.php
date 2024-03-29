<div>
    <h1 class="card-title text-xl pb-5 font-bold">New Appointment</h1>
    <x-form wire:submit="save">
        <x-choices
            label="Patient*"
            search-function="searchPatients"
            wire:model="form.patientId"
            :options="$patientSearchable"
            option-label="name"
            option-sub-label="phone"
            min-chars="2"
            single
            searchable
        />
        <x-choices
            label="Doctor*"
            wire:model="form.doctorId"
            search-function="searchDoctors"
            :options="$doctorSearchable"
            option-label="name"
            option-sub-label="phone"
            min-chars="2"
            single
            searchable
        />
        <x-datetime label="Appointment Date*" wire:model="form.date" icon="o-calendar" />
        <x-datetime label="Time" wire:model="form.time" icon="o-calendar" type="time" />

        <x-textarea
            label="Notes"
            wire:model="form.notes"
            rows="5"
            inline
        />

        <x-slot:actions>
{{--            <x-button label="Save and Print" class="btn-primary" type="submit" spinner="save" />--}}
            <x-button label="Save" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
