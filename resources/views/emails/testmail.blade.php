@component('mail::message')
    # Welcome to Email template

    You are receiving this email because we received a signup request for your this mail account.

    @component('mail::button', ['url' => 'http://devs-code.com'])
        Devs Code
    @endcomponent
    If you did not request a signup , no further action is required.

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
