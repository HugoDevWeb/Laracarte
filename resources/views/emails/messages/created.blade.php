@component('mail::message')
    # Hey Hugo

    From :{{ $name }}
    Email :{{ $email }}



@component('mail::panel')
    {{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
