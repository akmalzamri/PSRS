@component('mail::message')

# Therapist Message

<strong>To:</strong> {{ $data['email'] }}


<strong>Message From Therapist PSRS</strong>

"{{ $data['message'] }}"


@endcomponent
