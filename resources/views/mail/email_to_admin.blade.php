@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}<br>
Subject: {{ $sub }} <br><br>
Message:<br> {{ $msg }}

Thanks,
{{ config('app.name') }}
@endcomponent