<div>
    @php
        $doctors = \App\Models\Doctor::all();
    @endphp
    <x-header title="Appointments" separator>
        <x-slot:middle>
            <x-form>
                <x-select
                    label="Filter By Doctor"
                    icon="o-user"
                    :options="$doctors"
                    option-value="id"
                    wire:model.live="filterDoctorId"
                    placeholder="Select a Doctor"
                />
                <x-input label="Search Appointment" wire:model.live="searchKey" placeholder="Search By Patient Name, Phone number"/>
            </x-form>
        </x-slot:middle>
        <x-slot:actions>
            <x-button icon="o-plus" class="btn-primary" link="/appointment/new"/>
        </x-slot:actions>
    </x-header>
    @php
        $headers = [
            ['key' => 'doctor.name', 'label' => 'Doctor'],
            ['key' => 'patient.name', 'label' => 'Patient'],
            ['key' => 'appointment_date', 'label' => 'Date']
        ];
    @endphp
    <x-table :headers="$headers" :rows="$appointments" striped></x-table>
</div>
