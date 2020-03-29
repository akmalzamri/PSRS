@component('mail::message')
# Booking Details

<strong>Name</strong> 
{{ $data['user_name'] }}

<strong>Email</strong> 
{{ $data['user_email'] }}


<strong>Date</strong>
{{ $data['booking_date'] }}

<strong>Time</strong>
{{ $data['booking_time'] }}

<strong>TotalCharge</strong>
{{ $data['total_amount'] }}

@endcomponent
