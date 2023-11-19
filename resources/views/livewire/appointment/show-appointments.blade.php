<div>
    <x-header title="Appointment" separator />
    @php
        $headers = [
            ['key' => 'doctor.name', 'label' => 'Doctor'],
            ['key' => 'patient.name', 'label' => 'Patient'],
            ['key' => 'appointment_date', 'label' => 'Date']
        ];
    @endphp
    <x-table :headers="$headers" :rows="$appointments" striped></x-table>
</div>
