@component('mail::message')

# Enquiries Reply

<strong>To:</strong> {{ $data['email'] }}






<strong>Message From Admin PSRS</strong>

"{{ $data['message'] }}"


@endcomponent
