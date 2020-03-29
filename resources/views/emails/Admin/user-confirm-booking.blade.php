@component('mail::message')

# Bookings Details

Email: {{ $data['email'] }} <br>
Date: {{ $data['date'] }} <br>
Time: {{ $data['time'] }} <br>
Total: {{ $data['total'] }}

Your Booking is Confirmed!

@endcomponent
