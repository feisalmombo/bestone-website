@component('mail::message')
# Registration Token

Take this token for get account in Best One Ltd as Admin.

{{ $token }}

@component('mail::button', ['url' => 'http://localhost:8000/register'])
Register
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
