@component('mail::message')

# Your Role updated!

<strong>Email</strong> {{ $data['email'] }}

<strong>Usertype</strong>

{{ $data['usertype'] }}


@endcomponent
